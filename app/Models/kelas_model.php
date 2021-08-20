<?php

namespace App\Models;

use CodeIgniter\Model;

class kelas_model extends Model
{
    protected $table = 'kelas';
    protected $useTimeStamps = true;
    protected $allowedFields = ['id','nama','singkatan','gambar'];
    public function insertData($data)
    {
       return $this->db->table('kelas')->insert($data);
    }
    public function getData(){
        return $this->findAll();
    }
    public function getStatus($username){
        return $this->where('username',$username)->findColumn('status');
    }
    public function getNama($id){
        return $this->where('id',$id)->findColumn('nama');
    }
    public function getDataFirst($id)
    {
        return $this->db->table('kelas')->getWhere(['id'=>$id])->getRowArray();
        
    }
}