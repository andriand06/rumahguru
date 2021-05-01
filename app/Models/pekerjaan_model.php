<?php

namespace App\Models;

use CodeIgniter\Model;

class pekerjaan_model extends Model
{
    protected $table = 'pekerjaan';
    protected $useTimeStamps = true;
    protected $allowedFields = ['id','pekerjaan'];

    public function getData()
    {
        return $this->findAll();
    }
}