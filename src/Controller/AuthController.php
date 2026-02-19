<?php
declare (strict_types = 1);

namespace App\Controller;

use Authentication\Authenticator\Result;

class AuthController extends AppController
{
    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);
        $this->Authentication->allowUnauthenticated(['login', 'trakcareLogin']);
    }

    public function login()
    {
        $this->viewBuilder()->setLayout('auth');

        $result = $this->Authentication->getResult();

        if ($this->request->is('post') && $result->isValid()) {
            return $this->redirect(
                $this->Authentication->getLoginRedirect() ?? '/dashboard'
            );
        }

        if ($this->request->is('post')) {
            $this->Flash->error('Authentication failed');
        }
    }

    public function trakcareLogin()
    {
        $result = $this->Authentication->getResult();

        if ($result->isValid()) {
            return $this->redirect('/dashboard');
        }

        $this->Flash->error('Trakcare login failed');
        return $this->redirect('/login');
    }

    public function logout()
    {
        $this->Authentication->logout();
        return $this->redirect('/login');
    }
}
