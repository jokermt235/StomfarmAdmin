<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;

class Debt extends Entity{
    protected $_hidden = ['item_id','partner_id','mobile_id','server_code','user_id','created'];
}
