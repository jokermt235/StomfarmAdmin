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

            // Генерируем 'токен' API
            $entity->api_key_plain = Security::hash(Security::randomBytes(32), 'sha256', false);

            // Хешируем токен с помощью Bcrypt, чтобы BasicAuthenticate
            // мог его проверить при входе.
            $entity->api_key = $hasher->hash($entity->api_key_plain);
        }
        return true;
    }
}
