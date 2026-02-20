<?php
namespace App\Authentication\Authenticator;

use Authentication\Authenticator\AbstractAuthenticator;
use Authentication\Authenticator\Result;
use Cake\ORM\TableRegistry;
use GuzzleHttp\Client;
use Psr\Http\Message\ServerRequestInterface;

class TrakcareAuthenticator extends AbstractAuthenticator
{
    public function authenticate(ServerRequestInterface $request): Result
    {
        $query = $request->getQueryParams();

        $userid   = $query['userid'] ?? null;
        $username = $query['username'] ?? null;

        if (! $userid || ! $username) {
            return new Result(null, Result::FAILURE_CREDENTIALS_MISSING, ['Trakcare credentials missing']);
        }

        try {
            $urlTCID = env('STAFF_ACCESS') . $userid;

            $clientTCID = new Client(['verify' => false]);

            // Perform API request
            $apiResponseTCID = $clientTCID->request('GET', $urlTCID);

            $resultTCID = json_decode($apiResponseTCID->getBody()->getContents(), false);

            if (empty($resultTCID->tcusername)) {
                return new Result(null, Result::FAILURE_OTHER, ['Trakcare user not found']);
            }

            if ($resultTCID->tcusername !== $username) {
                return new Result(null, Result::FAILURE_OTHER, ['Trakcare user data mismatch']);
            }
        } catch (\Exception $e) {
            return new Result(null, Result::FAILURE_OTHER, ['Error connecting to Trakcare API: ' . $e->getMessage()]);
        }

        // Example: find SSO/HIS user
        $ssoUser = TableRegistry::getTableLocator()
            ->get('SsoUsers', ['connectionName' => 'ssodb'])
            ->find()
            ->where([
                'status_id' => 2,
                'OR'        => [
                    'email LIKE' => "%$username%",
                    'mail LIKE'  => "%$username%",
                ],
            ])
            ->first();

        if ($ssoUser) {
            $accessRoleTable = TableRegistry::getTableLocator()
                ->get('AccessRoleIjnPharmacy', ['connectionName' => 'ssodb']);
            $accessRoleData = $accessRoleTable->find()->where([
                'user_id'   => $ssoUser->id,
                'status_id' => 2,
            ])->first();

            if (! $accessRoleData) {
                return new Result(null, Result::FAILURE_IDENTITY_NOT_FOUND, ['User is not allowed to login.']);
            }

            $usersTable = TableRegistry::getTableLocator()->get('PharmacyDashboardUsers');
            $user       = $usersTable->find()->where([
                'user_sso_id' => $ssoUser->id,
                'inactive'    => 0,
            ])->first();

            if (! $user) {
                $user                = $usersTable->newEmptyEntity();
                $user->role_sso_id   = $accessRoleData->role_id;
                $user->user_sso_id   = $ssoUser->id;
                $user->status_sso_id = $ssoUser->status_id;
            } else {
                $user                = $usersTable->get($user->id);
                $user->role_sso_id   = $accessRoleData->role_id;
                $user->user_sso_id   = $ssoUser->id;
                $user->status_sso_id = $ssoUser->status_id;
            }

            $ssoUser->userData = $user;

            if ($usersTable->save($user)) {
                return new Result($ssoUser, Result::SUCCESS);
            } else {
                return new Result(null, Result::FAILURE_OTHER, ['Authentication failed. Please try again.']);
            }
        } else {
            return new Result(null, Result::FAILURE_IDENTITY_NOT_FOUND, ['User not exist.']);
        }
    }
}
