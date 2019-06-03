<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;

class User extends Entity{
    protected $_hidden = ['password','api_key','PASSWORD','api_key_plain','token'];
}
