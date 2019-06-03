<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

class PartnersController extends AppController
{

    public function index()
    {
        $partners = $this->paginate($this->Partners);
        $this->set(compact('partners'));
        $this->set('_serialize',['partners']);
    }

    public function add()
    {
        $partner = $this->Partners->newEntity();
        if ($this->request->is('post')) {
            $data  = $this->request->getData();
            $partner = $this->Partners->patchEntity($partner, $data);
            if($this->Partners->save($partner)){
                return 
                $this->response->withType('application/json')
                    ->withStringBody(json_encode(['status'=>1]));
            }
            return 
            $this->response->withType('application/json')
                ->withStringBody(json_encode(['status'=>0]));   
        }
    }

    public function view($id = null)
    {
        $partner  = $this->Partners->get($id);
        $this->set(compact('partner'));
        $this->set('_serialize',['partner']);
    }
}
