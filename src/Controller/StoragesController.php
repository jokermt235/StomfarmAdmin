<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

class StoragesController extends AppController
{

    public function index()
    {
        $storages = $this->paginate($this->Storages);
        $this->set(compact('storages'));
        $this->set('_serialize',['storages']);
    }

    public function add()
    {
        $storage = $this->Storages->newEntity();
        if ($this->request->is('post')) {
            $data  = $this->request->getData();
            $storage = $this->Storages->patchEntity($storage, $data);
            if($this->Storages->save($storage)){
                return 
                $this->response->withType('application/json')
                    ->withStringBody(json_encode(['status'=>1]));
            }
            return 
            $this->response->withType('application/json')
                ->withStringBody(json_encode(['status'=>0]));   
        }
    }

    public function edit($id=null)
    {
        if ($this->request->is('post')) {
            $storage = $this->Storages->newEntity();
            $data  = $this->request->getData();
            $storage = $this->Storages->patchEntity($storage, $data);
            if($this->Storages->save($storage)){
                return 
                $this->response->withType('application/json')
                    ->withStringBody(json_encode(['status'=>1]));
            }
            return 
            $this->response->withType('application/json')
                ->withStringBody(json_encode(['status'=>0]));   
        }

        $this->set('storage', $this->Storages->get('id'));
    }
}
