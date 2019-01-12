<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

class DocumentsController extends AppController
{

    public function index()
    {
        $documents = $this->paginate($this->Documents);
        $this->set(compact('documents'));
    }

    public function add()
    {

    }
}
