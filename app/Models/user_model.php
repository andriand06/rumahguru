<?php

namespace App\Models;

use CodeIgniter\Model;

class user_model extends Model 
{
    protected $table = 'user';
    protected $useTimeStamps =true;
    protected $allowedFields = ['id','namalengkap','username','email','password','konfirmasipassword','datecreated','is_active','is_admin'];

    public function insertUser($data)
    {
        return $this->db->table('user')->insert($data);
    }
    public function insertuserToken($data)
    {
        return $this->db->table('user_token')->insert($data);
    }
    public function getWhere($username)
    {
        return $this->db->table('user')->getWhere(['username'=>$username])->getRowArray();
    }
    public function getPurchase($username)
    {
        return $this->db->table('user_purchase')->getWhere(['username'=>$username])->getRowArray();
    }
    public function getData($id)
    {
        return $this->where(['id' => $id])->first();
        
    }
    public function getUser(){
        return $this->findAll();
    }
    public function getIsActive($username){
        return $this->where('username',$username)->findColumn('is_active');
    }
    public function getIsAdmin($username){
        return $this->where('username',$username)->findColumn('is_admin');
    }
    public function getEmail($email)
    {
        return $this->db->table('user')->getWhere(['email'=>$email])->getRowArray();
    }
    public function getToken($token)
    {
        return $this->db->table('user_token')->getWhere(['token'=>$token])->getRowArray();
    }
    public function aktivasi($emails)
    {
        $this->db->table('user')->set('is_active',1)->where('email',$emails)->update();
        $this->db->table('user_token')->delete('token');
    }
    public function insertuserTrial($data)
    {
        return $this->db->table('user_trial')->insert($data);
    }
    public function insertuserPurchase($data)
    {
        return $this->db->table('user_purchase')->insert($data);
    }
   
  


    
}