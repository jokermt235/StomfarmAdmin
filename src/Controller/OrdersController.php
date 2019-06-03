<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
/**
 * About Controller
 *
 *
 * @method \App\Model\Entity\About[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class OrdersController extends AppController
{
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->deny('index','view');
    }

    public function index()
    {
        $partners = $this->paginate($this->Orders);
        $this->set(compact('orders'));
        $this->set('_serialize',['orders']);
    }

    public function add()
    {
        if($this->request->is('post')){
            $data  = $this->request->getData();
            $order = $this->Orders->patchEntity($order, $data);
            if($this->Orders->save($order)){
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
