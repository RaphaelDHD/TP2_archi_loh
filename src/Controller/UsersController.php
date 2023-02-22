<?php

namespace App\Controller;
use Authentication\PasswordHasher\DefaultPasswordHasher;


class UsersController extends AppController
{

    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);

        $this->Authentication->allowUnauthenticated(['login', 'new']);
    }

    public function login()
    {
        $this->viewBuilder()->setLayout('template');
        
        $result = $this->Authentication->getResult();
        // If the user is logged in send them away.
        if ($result->isValid()) {
            $target = $this->Authentication->getLoginRedirect() ?? '/tickets';
            return $this->redirect($target);
        }
        if ($this->request->is('post')) {
            $this->Flash->error('Invalid username or password');
        }
    }

    public function logout()
    {
        $this->Authentication->logout();
        return $this->redirect(['controller' => 'Users', 'action' => 'login']);
    }

    public function new()
    {
        $user = $this->Users->newEntity([
            'email' => "admin@admin.fr",
            'name' => "admin",
            'password' => 123456
        ]);
        $this->Users->save($user);
        die();
        return $this->redirect(['controller' => 'Users', 'action' => 'login']);
    }

    protected function _setPassword(string $password)
    {
        $hasher = new DefaultPasswordHasher();
        return $hasher->hash($password);
    }

}
