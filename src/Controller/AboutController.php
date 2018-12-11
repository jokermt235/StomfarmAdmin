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
class AboutController extends AppController
{
    public function beforeFilter(Event $event)
    {
        //$this->getEventManager()->off($this->Csrf);
        //$this->eventManager()->off($this->Csrf);
        parent::beforeFilter($event);
        $this->Auth->allow(
            [
                'partners','reccomendation','invest','contact'
            ]
        );
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        
    }

    /**
     * Partners method
     *
     * @return \Cake\Http\Response|void
     */
    public function partners()
    {
        
    }

    public function reccomendation()
    {

    }

    public function invest()
    {

    }

    public function contact()
    {
    }

}
