<?php
namespace App\Model\Table;

use Cake\Auth\DefaultPasswordHasher;
use Cake\Utility\Text;
use Cake\Event\Event;
use Cake\ORM\Table;

class UsersTable extends Table
{
    public function beforeSave(Event $event)
    {
        $entity = $event->getData('entity');

        if ($entity->isNew()) {
            $hasher = new DefaultPasswordHasher();
        }
        return true;
    }
}
