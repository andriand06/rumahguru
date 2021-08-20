<?php

namespace App\Controllers;

use App\Models\kelas_model;
use App\Models\langganan_model;
use App\Models\profile_model;
use App\Models\subscriptions_model;
use App\Models\user_model;
use CodeIgniter\I18n\Time;
class Subscriptions extends BaseController
{
    protected $session;
    protected $user_model;
    protected $langganan_model;
    protected $subscriptions_model;
    protected $kelas_model;
    protected $profile_model;
    public function __construct()
    {
        $this->user_model = new user_model();
        $this->langganan_model = new langganan_model();
        $this->subscriptions_model = new subscriptions_model();
        $this->kelas_model = new kelas_model();
        $this->profile_model = new profile_model();
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
        $time = new Time('now');
        $username = $this->session->get('username');
        $email = $this->session->get('email');
        $langganan = $this->request->getPost('langganan');
        $langgananDays = ($this->langganan_model->getDays($langganan) !== null ? $this->langganan_model->getDays($langganan) : 1);
        $data = [
            'id' => '',
            'username' => $username,
            'email' => $email,
            'langganan' => $this->request->getPost('langganan'),
            'is_purchase' => 0,
            'datestart' => new Time(),
            'dateend' => $time->addDays($langgananDays),
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
        $email = $this->session->get('email');
     
        $data = [
            'id' => '',
            'username' => $username,
            'email' => $email,
            'langganan_id' => $this->request->getPost('langganan'),
            'is_purchase' => 0,
            'datestart' => new Time(),
            'dateend' => '',
        ];
        $langganan_id = $this->request->getVar('langganan');
        $this->user_model->insertuserPurchase($data);
        $data = [
            'isi' => $this->langganan_model->getData($langganan_id),
            'id'=> '',
            'username' => $username,
            'langganan_id' => $this->request->getVar('langganan'),
            'is_active' => $this->session->get('is_active'),
            'val' => \Config\Services::validation()
        ];
        
        //dd($isi);
        
        return view('/subscriptions/checkout',$data);
    }
    public function trial()
    {
        if($this->cek_status())
        {
            
            $this->cek_status();
            return redirect()->to('/auth/login');
        }
        $time = new Time('now');
       
        $username = $this->session->get('username');
        $data = 
        [
            'id' => '',
            'username' => $username,
            'trial' => 1,
            'datestart' => new Time('now'),
            'dateend' => $time->addDays(15),
        ];

        $this->user_model->insertuserTrial($data);
        $data = [
            'id' => '',
            'username' => $username,
            'trial' => 1,
            'datestart' => new time(),
            'dateend' => $time->addDays(15),
            'isactive' => $this->user_model->getIsActive($username),
            'kelas' => $this->kelas_model->getData(),
            'status' => $this->profile_model->getStatus($username)
        ];
        $this->session->set($data);
        //dd($data);
        session()->setFlashdata('pesan','Selamat anda berhasil mendaftar Kelas Trial selama 15hari!');
        return view('dashboard/index',$data);
    }
    public function upload($id)
    {
        if($this->cek_status())
        {
            
            $this->cek_status();
            return redirect()->to('/auth/login');
        }

        if(!$this->validate([
            'bukti' => [
                'rules'=> 'uploaded[bukti]|mime_in[bukti,image/jpg,image/jpeg,image/png]|max_size[bukti,2048]',
                'errors' => [
                    'uploaded' => 'Silahkan Upload Bukti Pembayaran',
                    'mime_in' => "File Bukti harus berupa jpg,jpeg,png",
                    "max_size" => "Ukuran file maksimal 2MB",
                ],
            ],
        ])) {
            session()->setFlashdata('error','Bukti Pembayaran Belum di Upload');
        //     $langganan_id = $this->request->getVar('langganan');
        //     $data = 
        // [
            
        //     'isi' => $this->langganan_model->getData($langganan_id),
        //     'val' => \Config\Services::validation()
        // ];
       $username = $this->session->get('username');
        
        $data = [
            'isi' => $this->langganan_model->getData($id),
            'isactive' => $this->session->get('is_active'),
            'username' => $username,
            'val' => \Config\Services::validation()
        ];
            return view('/subscriptions/checkout',$data);

        } else {
        $username = $this->session->get('username');
        $email = $this->session->get('email');
        $dataBukti = $this->request->getFile('bukti');
        $filename = $dataBukti->getRandomName();
        $this->subscriptions_model->insert([
            'id' => '',
            'username' => $username,
            'email' => $email,
            'bukti' => $filename,
            'date' => new Time('now'),
             
        ]);
       
        $dataBukti->move('upload/bukti/', $filename);
        session()->setFlashdata('pesan','Bukti berhasil diupload dan akan di proses Admin, Silahkan Tunggu Email dari Rumah Guru');
        return redirect()->to('/dashboard/index');
    }
    }
}