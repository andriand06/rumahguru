<?php

namespace App\Controllers;

use App\Models\purchase_model;
use App\Models\subscriptions_model;
use App\Models\user_model;
use App\Models\profile_model;
use App\Models\interest_model;
use phpDocumentor\Reflection\Types\This;

class Admin extends BaseController{
    protected $subscriptions_model;
    protected $user_model;
    protected $purchase_model;
    protected $profile_model;
    protected $interest_model;
    protected $session;
    public function __construct()
    {
        $this->subscriptions_model = new subscriptions_model();
        $this->user_model = new user_model();
        $this->purchase_model = new purchase_model();
        $this->profile_model = new profile_model();
        $this->interest_model = new interest_model();
        $this->session = \Config\Services::session();
        $this->session = \Config\Services::session();
        $this->email = \Config\Services::email();
        $this->username = $this->session->get('username');
        $this->is_admin($this->username);
    }
    public function index()
    {

       if($this->is_admin($this->username) ){
            return redirect()->to('/auth/login');
       } 
       else {
           session()->setFlashdata("admin","berhasil masuk sebagai Admin");
       }
        
        $data = 
        [
            'bukti' => $this->subscriptions_model->findAll(),
            'is_purchase' => $this->session->get('is_purchase'),
        ];
        
        return view('/admin/index',$data);
    }
    public function aktivasi($username)
    {
        if($this->is_admin($this->username) ){
            return redirect()->to('/auth/login');
       } 
       else {
           session()->setFlashdata("admin","berhasil masuk sebagai Admin");
       }
        $data = [
            'isi' =>  $this->user_model->getPurchase($username),
            'val' => \Config\Services::validation()
        ];
       
        return view('/admin/aktivasi',$data);
    }
    public function proses()
    {
        if($this->is_admin($this->username) ){
            return redirect()->to('/auth/login');
       } 
       else {
           session()->setFlashdata("admin","berhasil masuk sebagai Admin");
       }
        if(!$this->validate([
            'langganan_id' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Langganan Id harus diisi',
                ],
                ],
            
            'dateend' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Date End harus diisi',
                ],
            ],
        ])) {
            $username = $this->request->getPost('username');
            $data = 
            [
                'id' => $this->request->getPost('id'),
                'username' => $this->request->getPost('username'),
                'email' => $this->request->getPost('email'),
                'langganan_id' => $this->request->getPost('langganan_id'),
                'is_purchase' => 1,
                'datestart' => $this->request->getPost('datestart'),
                'dateend' => $this->request->getPost('dateend'),
                'val' => \Config\Services::validation(),
                'isi' => $this->user_model->getPurchase($username)
                
            ];
            return view('/admin/aktivasi',$data);
        } else 
        {
            $username = $this->request->getPost('username');
            $data = 
            [
                'id' => $this->request->getPost('id'),
                'username' => $this->request->getPost('username'),
                'email' => $this->request->getPost('email'),
                'langganan_id' => $this->request->getPost('langganan_id'),
                'is_purchase' => 1,
                'datestart' => $this->request->getPost('datestart'),
                'dateend' => $this->request->getPost('dateend'),
            ];
            $this->purchase_model->save($data);
            
            $this->session->set($data);
            session()->setFlashdata('pesan','Data '. $username .' berhasil di kirim dan telah di Aktivasi');
            $data = 
            [
                'bukti' => $this->subscriptions_model->findAll(),
                'val' => \config\Services::validation(),
                'isi' => $this->user_model->getPurchase($username),
            ];   
             ;
            return view('/admin/aktivasi',$data);
        }
    }
    public function sendEmail()
    {
        if($this->is_admin($this->username) ){
            return redirect()->to('/auth/login');
       } 
       else {
           session()->setFlashdata("admin","berhasil masuk sebagai Admin");
       }
        if($this->cek_status())
        {
            $this->cek_status();
            return redirect()->to('/auth/login');
        }
        $username = $this->session->get('username');
       $emails = $this->session->get('email');
      
        $this->email->setFrom('andriandavinta@gmail.com','Rumah Guru');
        $this->email->setTo($emails);
        
        $this->email->setSubject('Purchase Succesful');
        $this->email->setMessage('<h1>Rumah Guru</h1><p>Halo '.$username.'</p><p>Terima kasih telah membeli paket Langganan Rumah Guru.</p> <p>Bukti Pembayaran anda telah kami terima dan Akun anda sekarang dapat mengakses seluruh Kelas Rumah Guru!</p>
        <p>Terima Kasih dan Selamat Belajar!</p> <p>Salam,</p><p>Tim Rumah Guru</p>');
       
        if(!$this->email->send()){
            return false;
        } else {
           // $this->email->printDebugger(['headers']) ;
           session()->setFlashdata('pesan','Email berhasil dikirim.');
           return redirect()->to('/admin/index');
        }
    }

    public function profiluser() {
        if($this->cek_status())
        {
            $this->cek_status();
            return redirect()->to('/auth/login');
        
        }
        if($this->is_admin($this->username) ){
            return redirect()->to('/auth/login');
       } 
       else {
           session()->setFlashdata("admin","berhasil masuk sebagai Admin");
       }
        $data = [
            'profil' => $this->profile_model->getData(),

        ];

        return view('/admin/profiluser',$data);
    }
    public function interestuser(){
        if($this->cek_status())
        {
            $this->cek_status();
            return redirect()->to('/auth/login');
        }
        if($this->is_admin($this->username) ){
            return redirect()->to('/auth/login');
       } 
       else {
           session()->setFlashdata("admin","berhasil masuk sebagai Admin");
       }
        $data = [
            'interest' => $this->interest_model->getData(),

        ];

        return view('/admin/interestuser',$data);
    }
    public function datauser(){
        if($this->cek_status())
        {
            $this->cek_status();
            return redirect()->to('/auth/login');
        }
        if($this->is_admin($this->username) ){
            return redirect()->to('/auth/login');
       } 
       else {
           session()->setFlashdata("admin","berhasil masuk sebagai Admin");
       }
        $data = [
            'data' => $this->user_model->getUser(),

        ];

        return view('/admin/datauser',$data);
    }
    public function tambahadmin($username){
        if($this->cek_status())
        {
            $this->cek_status();
            return redirect()->to('/auth/login');
        }
        if($this->is_admin($this->username) ){
            return redirect()->to('/auth/login');
       } 
       else {
           session()->setFlashdata("admin","berhasil masuk sebagai Admin");
       }
       $data = [
           'dataadmin' => $this->user_model->getWhere($username),
       ];
       //$dataadmin = $this->user_model->getWhere($username);
       //dd($dataadmin);
       return view('/admin/tambahadmin',$data);
    }
}