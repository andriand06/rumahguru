<?php

namespace App\Controllers;

class Subscriptions extends BaseController
{
    protected $session;
    public function __construct()
    {
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
            'username' => $username,
            'isactive' => $this->session->get('is_active'),
        ];
        return view('/subscriptions/checkout',$data);
    }
}