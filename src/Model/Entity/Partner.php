<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;

class Partner extends Entity{
    protected $_hidden = ['status','mobile_id','user_id','acc_code','created','email'];
}
