<?php

namespace App\Controllers;



class dashboard extends BaseController
{
    protected $session;
   
    public function __construct()
    {
        $this->session = \Config\Services::session();
        $this->email = \Config\Services::email();
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
        $trial = $this->session->get('trial');
        //dd($trial);
        $data = [
            'username' => $username,
            'trial' => $trial,
            'isactive' => $this->session->get('is_active'),
            'status' => $this->session->get('status'),
        ];
        //$isactive = $this->session->get('is_active');
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