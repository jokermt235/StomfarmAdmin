<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

class SalesController extends AppController
{

    public function index($partner_id=null)
    {
        $sales = $this->paginate($this->Sales->find()->order(['id'=>'DESC']));
        if(!empty($partner_id)){
            $sales = $this->paginate($this->Sales->find()->where(['partner_id'=>$partner_id])->order(['id'=>'DESC']));
        }
        $this->set(compact('sales'));
        $this->set('_serialize',['sales']);
    }

    public function add()
    {
        $sale = $this->Sales->newEntity();
        if ($this->request->is('post')) {
            $data  = $this->request->getData();
            $sale = $this->Sales->patchEntity($sale, $data);
            if($this->Sales->save($sale)){
                return 
                $this->response->withType('application/json')
                    ->withStringBody(json_encode(['status'=>1]));
            }
            return 
            $this->response->withType('application/json')
                ->withStringBody(json_encode(['status'=>0]));   
        }
    }
}
