<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;

class Item extends Entity{
    protected $_hidden = ['mobile_id','deleted','mobile_id','barcode_image','user_id','created','alias','description','storage_id'];
}
