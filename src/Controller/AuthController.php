<?php
declare (strict_types = 1);

namespace App\Controller;

use Authentication\Authenticator\Result;

class AuthController extends AppController
{
    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);
        $this->Authentication->allowUnauthenticated(['login']);
    }

    public function login()
    {
        $this->viewBuilder()->setLayout('auth');
        if ($this->request->is('post')) {
            $result = $this->Authentication->getResult();

            if ($result->isValid()) {
                return $this->redirect(
                    $this->Authentication->getLoginRedirect() ?? '/dashboard'
                );
            } else {
                $this->Flash->error(
                    $result->getErrors()[0] ?? 'Authentication failed. Please try again.'
                );
            }
        }
    }

    public function logout()
    {
        $this->Authentication->logout();
        return $this->redirect('/login');
    }
}
