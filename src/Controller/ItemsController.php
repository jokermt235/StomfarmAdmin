<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

class ItemsController extends AppController
{

    public function index()
    {
        $items = $this->paginate($this->Items);
        $this->set(compact('items'));
    }

    public function add()
    {

    }
}
