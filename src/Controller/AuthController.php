<?php
declare (strict_types = 1);

namespace App\Controller;

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

        $query = $this->request->getQueryParams();

        $isTrakcareLogin =
        ! empty($query['userid']) &&
        ! empty($query['username']);

        $isFormLogin = $this->request->is('post');

        if (! $isTrakcareLogin && ! $isFormLogin) {
            return;
        }

        $result = $this->Authentication->getResult();

        if (! $this->request->is('post') && ! $this->request->getQuery('userid')) {
            return;
        }

        if ($result->isValid()) {
            $this->Flash->success('Login successful');
            return $this->redirect('/dashboard');
        }

        if ($this->request->is('post') || $this->request->getQuery('userid')) {
            $this->Flash->error(
                $result->getErrors()[0] ?? 'Unable to verify login'
            );
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
