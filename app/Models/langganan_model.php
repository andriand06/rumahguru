<?php

namespace App\Models;

use CodeIgniter\Model;

class langganan_model extends Model
{
    protected $table = 'langganan';
    protected $useTimeStamps =true;
    protected $allowedFields = ['id','username','langganan_id','is_active'];

    public function getData($id)
    {
        return $this->where(['id' => $id])->first();
        
    }
    public function getDays($id){
        return $this->where('id',$id)->findColumn('days');
    }

}