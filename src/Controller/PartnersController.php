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
    }

    public function add()
    {

    }
}
