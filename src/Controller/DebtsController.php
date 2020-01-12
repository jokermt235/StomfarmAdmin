<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

class DebtsController extends AppController
{

    public function index($partner_id=null)
    {
        $debts = $this->paginate($this->Debts->find()->order(['id'=>'DESC']));
        if(!empty($partner_id)){
            $debts = $this->paginate($this->Debts->find()->where(['partner_id'=>$partner_id])->order(['id'=>'DESC']));
        }
        $this->set(compact('debts'));
        $this->set('_serialize',['debts']);
    }

    public function add()
    {
        $sale = $this->Debts->newEntity();
        if ($this->request->is('post')) {
            $data  = $this->request->getData();
            $debt = $this->Debts->patchEntity($debt, $data);
            if($this->Debts->save($debt)){
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
