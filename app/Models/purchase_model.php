<?php

namespace App\Models;

use CodeIgniter\Model;

class purchase_model extends Model 
{
    protected $table = 'user_purchase';
    protected $useTimeStamps = true;
    protected $allowedFields = ['id','username','email','langganan_id','is_purchase','datestart','dateend'];

    public function getPurchase($username) {
        return $this->where('username',$username)->findColumn('is_purchase');
    }
    public function getDateEnd($username) {
        return $this->where('username',$username)->findColumn('dateend');
    }
}