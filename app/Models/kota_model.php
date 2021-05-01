<?php

namespace App\Models;

use CodeIgniter\Model;

class kota_model extends Model
{
    protected $table = 'kota_provinsi';
    protected $useTimeStamps = true;
    protected $allowedFields = ['id','kota','provinsi'];
    public function getData()
    {
        return $this->findAll();
    }
}