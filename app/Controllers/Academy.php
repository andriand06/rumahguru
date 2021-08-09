<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\purchase_model;
use App\Models\usertrial_model;
use App\Models\kelas_model;
use App\Models\materi_model;
use PhpParser\Node\Expr\FuncCall;

class Academy extends BaseController
{
    protected $session;
    protected $purchase_model;
    protected $usertrial_model;
    protected $kelas_model;
    protected $materi_model;
    protected $namakelas;
    public function __construct()
    {
        $this->session =\Config\Services::session();
        $this->cek_status();
        $this->purchase_model = new purchase_model();
        $this->usertrial_model = new usertrial_model();
        $this->kelas_model = new kelas_model();
        $this->materi_model = new materi_model();
        $pager = \Config\Services::pager();
    }
    
    public function list()
    {
        if($this->cek_status())
        {
            $this->cek_status();
            return redirect()->to('/auth/login');
        }
        $username = $this->session->get('username');
        $dateend = ($this->usertrial_model->getDateEnd($username) !== null ? $this->usertrial_model->getDateEnd($username) : null );
        $end = ($dateend === null ? null  : implode("",$dateend));

        $dateendsubscription = ($this->purchase_model->getDateEnd($username) !== null ? $this->purchase_model->getDateEnd($username) : null);
        $endsubscription = ($dateendsubscription === null ? null : implode("",$dateendsubscription));
        $data = [
            'username' => $username,
            'trial' => ($end === null ? null : (time() > strtotime($end) ? 2 : 1)),
            'isactive' => $this->session->get('is_active'),
            'kelas' => $this->kelas_model->getData(),
            'is_purchase' =>  ($endsubscription === null ? null : ( time() > strtotime($endsubscription) ? 0 : 1)),
        ];
       
        $trial = ($end === null ? null : (time() > strtotime($end) ? 2 : 1));
        $is_purchase = $this->purchase_model->getPurchase($username);
        //dd($trial);
        //dd($is_purchase);
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
        $dateend = ($this->usertrial_model->getDateEnd($username) !== null ? $this->usertrial_model->getDateEnd($username) : null );
        $end = ($dateend === null ? null  : implode("",$dateend));
        $dateendsubscription = ($this->purchase_model->getDateEnd($username) !== null ? $this->purchase_model->getDateEnd($username) : null);
        $endsubscription = ($dateendsubscription === null ? null : implode("",$dateendsubscription));
        $data = [
            'username' => $username,
            'trial' => ($end === null ? null : (time() > strtotime($end) ? 2 : 1)),
            'isactive' => $this->session->get('is_active'),
            'kelas' => $this->session->get('kelas'),
            'is_purchase' => ($endsubscription === null ? null : ( time() > strtotime($endsubscription) ? 0 : 1)),
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
        $dateend = ($this->usertrial_model->getDateEnd($username) !== null ? $this->usertrial_model->getDateEnd($username) : null );
        $end = ($dateend === null ? null  : implode("",$dateend));
        $data = [
            'username' => $username,
            'trial' => ($end === null ? null : (time() > strtotime($end) ? 2 : 1)),
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
        $dateendsubscription = ($this->purchase_model->getDateEnd($username) !== null ? $this->purchase_model->getDateEnd($username) : null);
        $endsubscription = ($dateendsubscription === null ? null : implode("",$dateendsubscription));
        $is_purchase = ($endsubscription === null ? null : ( time() > strtotime($endsubscription) ? 0 : 1));
        if ($is_purchase === "0" || !isset($is_purchase) || $is_purchase === null)
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
    public function lesson($id){
        $kelas = $this->kelas_model->getDataFirst($id);
        $data['lesson'][] = array('title' => $this->kelas_model->getNama($id),'modul' => $this->materi_model->getModul($id),'submodul' => $this->materi_model->getSubModul($id),'deskripsi' => $this->materi_model->getDeskripsi($id));
        $title =$this->kelas_model->getNama($id);
        session()->set($data);
            $data = [
                'lesson' => array('title' => $this->kelas_model->getNama($id),'modul'=>$this->materi_model->getModul($id)),
                'username' => $this->session->get('username'),
                'kelas' => $this->kelas_model->getDataFirst($id),
                'materi' => $this->materi_model->getDataFirst($id),
                'title' => $this->kelas_model->getNama($id),
                'materi' => $this->materi_model->paginate(5),
                'pager' => $this->materi_model->pager,
                'id' => $id,
            ];
        
        //dd($title);
        return view("/academy/lesson/index.php",$data);
    }

    public function tutorials(){
        return view('/academy/tutorials/index.php');
    }
    
}