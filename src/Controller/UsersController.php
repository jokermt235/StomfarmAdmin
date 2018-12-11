<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Auth\DefaultPasswordHasher;
use Cake\Event\Event;

class UsersController extends AppController
{
    public function beforeFilter(Event $event)
    {
        //$this->getEventManager()->off($this->Csrf);
        //$this->eventManager()->off($this->Csrf);
        parent::beforeFilter($event);
        $this->Auth->allow(['logout']);
    }

    public function login()
    {
        $password = "falOne1Two2";
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                 return $this->response->withStatus(200);
            } else {

                return  $this->response->withStatus(403);
            }
        }
    }

    public function logout() {
        return $this->redirect($this->Auth->logout());
    }

}    
