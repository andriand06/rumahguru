<?php
namespace App\Controllers;
use App\Controllers\Academy;
use App\Controllers\BaseController;

class Matematika extends Academy{
    protected $session;
    public function __construct()
    {
        $this->session =\Config\Services::session();
        $this->cek_status();
       
    }
    public function lessons(){
        $username = $this->session->get('username');
        $dateendsubscription = ($this->purchase_model->getDateEnd($username) !== null ? $this->purchase_model->getDateEnd($username) : null);
        $endsubscription = ($dateendsubscription === null ? null : implode("",$dateendsubscription));
        $is_purchase = ($endsubscription === null ? null : ( time() > strtotime($endsubscription) ? 0 : 1));
        if ($is_purchase === "0" || !isset($is_purchase) || $is_purchase === null)
        {
            session()->setFlashdata('pesan','Maaf Anda belum melakukan pembelian Langganan, Silahkan membeli paket Langganan terlebih dahulu');
            return redirect()->to('/academy/list');
        }
        return view("/academy/matematika/lessons/");
    }
   

    
}

?>