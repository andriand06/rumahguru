<?php

namespace App\Models;

use CodeIgniter\Model;

class materi_model extends Model
{
    protected $table = 'materi';
    protected $useTimeStamps = true;
    protected $allowedFields = ['idkelas','modul','submodul','deskripsi'];
    public function insertData($data)
    {
       return $this->db->table('materi')->insert($data);
    }
    public function getData(){
        return $this->findAll();
    }
    public function getDataWithId($id){
        return $this->db->table('materi')->getWhere(['idkelas'=>$id]);
    }
    public function getDataFirst($submodul)
    {
        return $this->db->table('materi')->getWhere(['submodul'=>$submodul])->getRowArray();
    }
    public function getModul($id){
        return $this->where('idkelas',$id)->findColumn('modul');
    }
    public function getSubModul($id){
        return $this->where('idkelas',$id)->findColumn('submodul');
    }
    public function getDeskripsi($id){
        return $this->where('idkelas',$id)->findColumn('deskripsi');
    }
}