<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

class ItemsController extends AppController
{

    public function index()
    {
        $config = [];
        if(!empty($this->request->getQuery())){
            $config = $this->request->getQuery();
        }
        $items = $this->paginate($this->Items->find()->order(['name'=>'ASC']),$config);
        $this->set(compact('items'));
        $this->set('params',$config);
        $this->set('_serialize',['items','params']);
    }

    public function add()
    {
        $item = $this->Items->newEntity();
        if ($this->request->is('post')) {
            $data  = $this->request->getData();
            $data['server_code'] = time();
            $item = $this->Items->patchEntity($item, $data);
            if($this->Items->save($item)){
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
            $item = $this->Items->newEntity();
            $data  = $this->request->getData();
            $item = $this->Items->patchEntity($item, $data);
            if($this->Items->save($item)){
                return 
                $this->response->withType('application/json')
                    ->withStringBody(json_encode(['status'=>1]));
            }
        }

        $this->set('item', $this->Items->get($id));
    }
}
