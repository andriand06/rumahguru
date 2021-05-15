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
            'is_purchase' => $this->session->get('is_purchase'),
        ];
        
        return view('/academy/list',$data);
    }

    public function my()
    {
        if($this->cek_status())
        {
            $this->cek_status();
            return redirect()->to('/auth/login');
        }
        $username = $this->session->get('username');
        $trial = $this->session->get('trial');
        $data = [
            'username' => $username,
            'trial' => $trial,
            'isactive' => $this->session->get('is_active'),
        ];
        return view('academy/my',$data);
    }
    public function exams()
    {
        if($this->cek_status())
        {
            $this->cek_status();
            return redirect()->to('/auth/login');
        }
        $username = $this->session->get('username');
        $trial = $this->session->get('trial');
        $data = [
            'username' => $username,
            'trial' => $trial,
            'isactive' => $this->session->get('is_active'),
        ];
        return view('academy/exams',$data);
    }
    public function submission()
    {
        if($this->cek_status())
        {
            $this->cek_status();
            return redirect()->to('/auth/login');
        }
        $username = $this->session->get('username');
        $trial = $this->session->get('trial');
        $data = [
            'username' => $username,
            'trial' => $trial,
            'isactive' => $this->session->get('is_active'),
        ];
        return view('academy/submission',$data);
    }
    public function matematika()
    {
        $is_purchase = $this->session->get('is_purchase');
        if ($is_purchase == 0)
        {
            session()->setFlashdata('pesan','Maaf Anda belum melakukan pembelian Langganan, Silahkan membeli paket Langganan terlebih dahulu');
            return view('/academy/list');
        } else
        {
            $username = $this->session->get('username');
            $data = 
            [
                'username' => $username,
                'isactive' => $this->session->get('is_active'),
                'is_purchase' => $this->session->get('is_purchase'),
            ];
            return view('/academy/matematika',$data);
        }
    }
}