<?php

namespace App\Models;

use CodeIgniter\Model;

class profile_model extends Model
{
    protected $table = 'profile';
    protected $useTimeStamps = true;
    protected $allowedFields = ['id','namalengkap','username','notelp','kota','kotattl','tanggallahir','pendidikan','perusahaan','pekerjaan'];
    public function insertData($data)
    {
       return $this->db->table('profile')->insert($data);
    }
}