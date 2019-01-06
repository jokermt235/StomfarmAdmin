<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

class StoragesController extends AppController
{

    public function index()
    {
        $storages = $this->paginate($this->Storages);
        $this->set(compact('storages'));
    }

    public function add()
    {

    }
}
