<?php
namespace App\Model\Table;

use Cake\Auth\DefaultPasswordHasher;
use Cake\Utility\Text;
use Cake\Event\Event;
use Cake\ORM\Table;
use Cake\Log\Log;

class UsersTable extends Table
{
    public function initialize(array $config){
        
    }
    public function beforeSave(Event $event, $entity)
    {
        $hasher = new DefaultPasswordHasher();
        $entity->password = $hasher->hash($entity->password);
        return true;
    }
}
