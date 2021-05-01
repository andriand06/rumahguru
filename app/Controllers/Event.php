<?php

namespace App\Controllers;

class Event extends BaseController
{
    protected $session;
    public function __construct()
    {
        $this->session = \Config\Services::session();
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
        $data = [
            'username' => $username,
            'isactive' => $this->session->get('is_active'),
        ];
        
        return view('/event/index',$data);
    }
}