<?php
namespace App\Authentication\Authenticator;

use Authentication\Authenticator\AbstractAuthenticator;
use Authentication\Authenticator\Result;
use Psr\Http\Message\ServerRequestInterface;

class SsoAuthenticator extends AbstractAuthenticator
{
    public function authenticate(ServerRequestInterface $request): Result
    {
        /* $url = 'https://sso.awan.info/api/login-external';

        $data = $request->getParsedBody();

        if (empty($data['email']) || empty($data['password'])) {
            return new Result(null, Result::FAILURE_CREDENTIALS_MISSING, ['Credentials are required']);
        }

        $client   = new Client(['verify' => false]);
        $response = $client->request('POST', $url, [
            'form_params' => [
                'platform' => 'web',
                'email'    => $data['email'],
                'password' => $data['password'],
            ],
        ]);

        $statusCode = $response->getStatusCode();
        $content    = $response->getBody()->getContents();
        $resultData = json_decode(($content), false);
        $status     = $resultData->status; */

        return new Result(null, Result::FAILURE_CREDENTIALS_INVALID, ['Invalid credentials']);
        /*  if ($statusCode == 200 && $status != 'failed') {
            $ssoUser = TableRegistry::getTableLocator()
                ->get('SsoUsers', ['connectionName' => 'ssodb'])
                ->find()
                ->where([
                    'id' => $resultData->data->id,
                    'staffno' => $resultData->data->staffno,
                    'status_id' => 2
                ])  // Using sso_user_id to match with SsoUsers.id
                ->first();

            if ($ssoUser) {
                $usersTable = TableRegistry::getTableLocator()->get('Users');
                $user = $usersTable->find()->where([
                    'user_sso_id' => $ssoUser->id,
                    'inactive' => 0
                ])->first();
                if (!$user) {
                    $user = $usersTable->newEmptyEntity();
                    $user->user_sso_id = $ssoUser->id;
                    $user->status_sso_id = $ssoUser->status_id;
                } else {
                    $user = $usersTable->get($user->id);
                    $user->user_sso_id = $ssoUser->id;
                    $user->status_sso_id = $ssoUser->status_id;
                }

                $accessRoleTable = TableRegistry::getTableLocator()->get('AccessroleIjnsb');
                $accessRoleData = $accessRoleTable->find()->where([
                    'user_id' => $ssoUser->id,
                    'status_id' => 2
                ])->first();

                if (!$accessRoleData) {
                    $accessRole = $accessRoleTable->newEmptyEntity();
                    $accessRole->role_id = 2;
                } else {
                    $accessRole = $accessRoleTable->get($accessRoleData->id);
                }

                $accessRole->user_id = $ssoUser->id;
                $accessRole->status_id = 2;
                $accessRole->updated_by = "IJNSB";
                $accessRole->created_at = new DateTime();
                $accessRole->updated_at = new DateTime();
                $user->role_sso_id = $accessRole->role_id;

                $ssoUser->userData = $user;

                if ($usersTable->save($user) && $accessRoleTable->save($accessRole)) {
                    return new Result($ssoUser, Result::SUCCESS);
                } else {
                    return new Result(null, Result::FAILURE_CREDENTIALS_INVALID, ['Invalid credentials']);
                }
            } else {
                return new Result(null, Result::FAILURE_CREDENTIALS_INVALID, ['IJNSSSO User not found']);
            }
        } else {
            return new Result(null, Result::FAILURE_CREDENTIALS_INVALID, ['Invalid credentials']);
        } */
    }
}
