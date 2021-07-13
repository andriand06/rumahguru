<?php

namespace App\Models;

use CodeIgniter\Model;

class usertrial_model extends Model 
{
    protected $table = 'user_trial';
    protected $useTimeStamps =true;
    protected $allowedFields = ['id','username','trial','datestart','dateend'];

    public function getTrial($username){
        return $this->where('username',$username)->findColumn('trial');
    }
    public function getDateEnd($username){
        return $this->where('username',$username)->findColumn('dateend');
    }

}