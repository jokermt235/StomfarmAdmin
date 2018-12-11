<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
/**
 * Catalog Controller
 *
 *
 * @method \App\Model\Entity\Catalog[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CatalogController extends AppController
{
    public function beforeFilter(Event $event)
    {
        //$this->getEventManager()->off($this->Csrf);
        //$this->eventManager()->off($this->Csrf);
        parent::beforeFilter($event);
        $this->Auth->allow(
            [
                'commercial','beans','dryfruits','nuts','medherbs','greens','desiccator','hugs','agroequipment',
                'boiler','juicer','agrobuild','seedlings'
            ]
        );
    }

    public function commercial()
    {
    }

    public function beans()
    {
    }

    public function dryfruits()
    {
    }

    public function nuts()
    {
    }

    public function medherbs()
    {
    }

    public function greens()
    {
    }

    public function desiccator()
    {
    }

    public function hugs()
    {
    }

    public function agroequipment()
    {
    }

    public function boiler()
    {
    }

    public function juicer()
    {
    }

    public function agrobuild()
    {
    }

    public function seedlings()
    {
    }

}
