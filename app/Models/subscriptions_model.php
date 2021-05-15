<?php

namespace App\Models;

use CodeIgniter\Model;

class subscriptions_model extends Model{
    protected $table = 'bukti';
    protected $useTimeStamps = true;
    protected $allowedFields = ['id','username','email','bukti','date'];

    public function insertData($data)
    {
        return $this->table('bukti')->insert($data);
    }
}