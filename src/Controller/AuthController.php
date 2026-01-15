<?php
declare (strict_types = 1);

namespace App\Controller;

use Cake\Controller\Controller;

class AuthController extends AppController
{
    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);
        $this->Authentication->allowUnauthenticated(['login']);
    }

    public function login()
    {
        $result = $this->Authentication->getResult();

        if ($result->isValid()) {
            return $this->redirect(
                $this->Authentication->getLoginRedirect() ?? '/'
            );
        }

        debug($result);
        if ($this->request->is('post')) {
            $errors = $result->getErrors();

            if (! empty($errors)) {
                foreach ($errors as $error) {
                    $this->Flash->error($error);
                }
            } else {
                $this->Flash->error('Login failed. Please try again.');
            }
        }
    }

    public function logout()
    {
        $this->Authentication->logout();
        return $this->redirect('/login');
    }
}
