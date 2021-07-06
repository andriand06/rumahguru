<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\purchase_model;
class Academy extends BaseController
{
    protected $session;
    protected $purchase_model;
    public function __construct()
    {
        $this->session =\Config\Services::session();
        $this->cek_status();
        $this->purchase_model = new purchase_model();
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
            'is_purchase' => $this->purchase_model->getPurchase($username),
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
            'kelas' => $this->session->get('kelas'),
            'is_purchase' => $this->purchase_model->getPurchase($username),
        ];
        //$is_purchase = $this->purchase_model->getPurchase($username);
        //dd($is_purchase);
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
        $username = $this->session->get('username');
        $is_purchase = $this->purchase_model->getPurchase($username);
        if ($is_purchase === "0" || !isset($is_purchase))
        {
            session()->setFlashdata('pesan','Maaf Anda belum melakukan pembelian Langganan, Silahkan membeli paket Langganan terlebih dahulu');
            return redirect()->to('/academy/list');
        } else
        {
            $username = $this->session->get('username');
            $data =
            [
                'kelas' => ['matematika']
            ];
            session()->set($data);
        
            $data = 
            [
                'username' => $username,
                
                
            ];
            return view('/academy/matematika',$data);
        }
    }
}