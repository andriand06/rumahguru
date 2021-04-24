<?php

namespace App\Controllers;

use App\Models\langganan_model;
use App\Models\user_model;
use CodeIgniter\I18n\Time;
class Subscriptions extends BaseController
{
    protected $session;
    protected $user_model;
    protected $langganan_model;
    public function __construct()
    {
        $this->user_model = new user_model();
        $this->langganan_model = new langganan_model();
        $this->session = \Config\Services::session();
        $this->cek_status();
    }
    public function Purchase()
    {
        if($this->cek_status())
        {
            dd($this->cek_status());
            return redirect()->to('/auth/login');
        }
        
        $username = $this->session->get('username');
        $data = [
            'username' => $username,
            'isactive' => $this->session->get('is_active'),
            'langganan' => $this->request->getPost('langganan'),
        ];
        return view('/subscriptions/purchase',$data);
    }
    public function checkout()
    {
        if($this->cek_status())
        {
            
            $this->cek_status();
            return redirect()->to('/auth/login');
        }
        $username = $this->session->get('username');
     
        $data = [
            'id'=> '',
            'username' => $username,
            'langganan_id' => $this->request->getVar('langganan'),
            'is_active' => $this->session->get('is_active'),
        ];
        $langganan_id = $this->request->getVar('langganan');
        $this->user_model->insertuserPurchase($data);
        $data = [
            'isi' => $this->langganan_model->getData($langganan_id),
            'id'=> '',
            'username' => $username,
            'langganan_id' => $this->request->getVar('langganan'),
            'is_active' => $this->session->get('is_active'),
        ];
        $isi = $this->langganan_model->getData($langganan_id);
        //dd($isi);
        
        return view('/subscriptions/checkout',$data);
    }
    public function trial()
    {
        $time = new Time('now');
        $username = $this->session->get('username');
        $data = 
        [
            'id' => '',
            'username' => $username,
            'trial' => 1,
            'datestart' => time(),
            'dateend' => $time->addDays(15),
            
        ];

        $this->user_model->insertuserTrial($data);
        $data = [
            'id' => '',
            'username' => $username,
            'trial' => 1,
            'datestart' => time(),
            'dateend' => $time->addDays(15),
            'isactive' => $this->session->get('is_active')
        ];
        $this->session->set($data);
        //dd($data);
        session()->setFlashdata('pesan','Selamat anda berhasil mendaftar Kelas Trial selama 15hari!');
        return view('dashboard/index',$data);
    }
}