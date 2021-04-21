<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Academy extends BaseController
{
    protected $session;
    public function __construct()
    {
        $this->session =\Config\Services::session();
        $this->cek_status();
    }
    
    public function list()
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
        
        return view('/academy/list',$data);
    }
}