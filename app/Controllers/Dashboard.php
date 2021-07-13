<?php

namespace App\Controllers;

use App\Models\user_model;
use App\Models\usertrial_model;
use App\Models\profile_model;

class dashboard extends BaseController
{
    protected $session;
    protected $user_model;
    protected $usertrial_model;
    protected $profile_model;
    public function __construct()
    {
        $this->session = \Config\Services::session();
        $this->email = \Config\Services::email();
        $this->user_model = new  user_model();
        $this->usertrial_model = new  usertrial_model();
        $this->profile_model = new profile_model();
        $this->cek_status();
    }
    public function index()
    {
        if($this->cek_status())
        {
            $this->cek_status();
            return redirect()->to('/auth/login');
        }
        $username = $this->session->get('username');
        $dateend = ($this->usertrial_model->getDateEnd($username) !== null ? $this->usertrial_model->getDateEnd($username) : null );
       $end = ($dateend === null ? null  : implode("",$dateend));
        $data = [
            'username' => $username,
            'trial' => ($end === null ? null : (time() > strtotime($end) ? 2 : 1)),
            'isactive' => $this->user_model->getIsActive($username),
            //'isactive' => $this->session->get('is_active'),
            'status' => $this->profile_model->getStatus($username),
        ];
        $trial = ($end === null ? null : (time() > strtotime($end) ? 2 : 1));
        //dd($trial);
       
        //$isactive = $this->user_model->getIsActive($username);
        //dd($isactive);
        return view('dashboard/index',$data);
    }
    

    public function sendEmail()
    {
        if($this->cek_status())
        {
            $this->cek_status();
            return redirect()->to('/auth/login');
        }
        $username = $this->session->get('username');
       $emails = $this->session->get('email');
       $token = $this->session->get('token');
        $this->email->setFrom('andriandavinta@gmail.com','Rumah Guru');
        $this->email->setTo($emails);
        
        $this->email->setSubject('Account Verification');
        $this->email->setMessage('<h1>Rumah Guru</h1><p>Halo '.$username.'</p><p>Terima kasih telah mendaftar sebagai member Rumah Guru.</p><p>Silahkan verifikasi akun anda agar mendapatkan benefit sbb : </p><p>1.Akses penuh ke semua fitur Rumah Guru</p> <p>2.Potongan harga spesial bagi Anda, pengguna baru</p> <p>3.Info beasiswa, jika ada</p> <p>Klik tombol di bawah ini untuk verifikasi.</p> <a href="'. base_url() .'/auth/verify?email='. $emails. '&token=' .urlencode($token). '" class="btn btn-primary">Verifikasi</a>
        <p>Selamat bergabung dan Selamat Belajar!</p> <p>Salam,</p><p>Tim Rumah Guru</p>');
       
        if(!$this->email->send()){
            return false;
        } else {
           // $this->email->printDebugger(['headers']) ;
           session()->setFlashdata('pesan','Email Verifikasi berhasil dikirim! Silahkan cek email anda.');
           return redirect()->to('/dashboard/index');
        }
    }
}

?>