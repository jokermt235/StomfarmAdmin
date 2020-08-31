<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Auth\DefaultPasswordHasher;
use Cake\Event\Event;
use Cake\Log\Log;
use Cake\ORM\TableRegistry;

class UsersController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('RequestHandler');
    }
    public function beforeFilter(Event $event)
    {
        //$this->getEventManager()->off($this->Csrf);
        //$this->eventManager()->off($this->Csrf);
        parent::beforeFilter($event);
        $this->Auth->allow(['logout']);
    }

    public function login()
    {
        $this->viewBuilder()->setLayout('login');
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

    public function logout()
    {
        return $this->redirect($this->Auth->logout());
    }

    public function index()
    {
        $users = $this->paginate($this->Users);
        $this->set(compact('users'));
        $this->set('_serialize',['users']);
        /*return $this->response->withType('application/json')
                      ->withStringBody(json_encode($users));*/
    }

    public function edit($id = null)
    {
        $users = TableRegistry::get('Users');
        $user  = $this->Users->get($id);
        if($this->request->is('post')){
            $data  = $this->request->getData();
            $users->patchEntity($user,$data);
            if($users->save($user)){
                return 
                    $this->response->withType('application/json')
                    ->withStringBody(json_encode(['status'=>1]));
            }else{
                return 
                    $this->response->withType('application/json')
                    ->withStringBody(json_encode(['status'=>0]));
            }
        }
        $this->set(compact('user'));
        $this->set('_serialize',['user']);
    }

    public function add()
    {
        $users = TableRegistry::get('Users');
        $user = $users->newEntity();
        if ($this->request->is('post')) {
            $data  = $this->request->getData();
            $user = $users->patchEntity($user, $data);
            if($users->save($user)){
                return 
                $this->response->withType('application/json')
                    ->withStringBody(json_encode(['status'=>1]));
            }
            return 
            $this->response->withType('application/json')
                ->withStringBody(json_encode(['status'=>0]));   
        }
    }

    public function delete($id=null){
        if($this->request->is('post')){
            $user = $this->Users->get($id);
            if($this->Users->delete($user)){
                return 
                    $this->response->withType('application/json')
                    ->withStringBody(json_encode(['status'=>1]));
            }
        }

        return 
            $this->response->withType('application/json')
                ->withStringBody(json_encode(['status'=>0]));
    }

    protected function _setPassword($password)
    {
        return (new DefaultPasswordHasher)->hash($password);
    }
}    
