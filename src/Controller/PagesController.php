<?php
declare(strict_types=1);

namespace App\Controller;

class PagesController extends AppController
{
    public function home()
    {
        $userLoggedIn = $this->Authentication->getIdentity();

        $this->set(compact('userLoggedIn'));
    }
}
