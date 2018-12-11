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
class AdminController extends AppController
{
    public function beforeFilter(Event $event)
    {
        //$this->getEventManager()->off($this->Csrf);
        //$this->eventManager()->off($this->Csrf);
        parent::beforeFilter($event);
        $this->Auth->deny('index','view');
    }

    public function index()
    {
    }
}
