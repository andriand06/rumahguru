<?php

namespace App\Models;

use CodeIgniter\Model;

class user_model extends Model 
{
    protected $table = 'user';
    protected $useTimeStamps =true;
    protected $allowedFields = ['id','namalengkap','username','email','password','konfirmasipassword','datecreated'];

    public function insertUser($data)
    {
        return $this->db->table('user')->insert($data);
    }
}