<?php

namespace App\Controllers;

use App\Models\purchase_model;
use App\Models\subscriptions_model;
use App\Models\user_model;
use App\Models\profile_model;
use App\Models\interest_model;
use App\Models\kelas_model;
use App\Models\materi_model;
use phpDocumentor\Reflection\Types\This;

class Admin extends BaseController{
    protected $subscriptions_model;
    protected $user_model;
    protected $purchase_model;
    protected $profile_model;
    protected $interest_model;
    protected $kelas_model;
    protected $materi_model;
    protected $session;
    public function __construct()
    {
        $this->subscriptions_model = new subscriptions_model();
        $this->user_model = new user_model();
        $this->purchase_model = new purchase_model();
        $this->profile_model = new profile_model();
        $this->interest_model = new interest_model();
        $this->kelas_model = new kelas_model();
        $this->materi_model = new materi_model();
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
        $username = $this->session->get('username');
        $data = 
        [
            'bukti' => $this->subscriptions_model->findAll(),
            'is_purchase' => $this->purchase_model->getPurchase($username),
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
    public function sendEmail($email)
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
        
        $this->email->setFrom('andriandavinta@gmail.com','Rumah Guru');
        $this->email->setTo($email);
        
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
    public function tambahadmin($id){
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
       $data = ['is_admin' => "1"];
       $this->user_model->set($data);
       $this->user_model->where('id',$id);
       $this->user_model->update();
        
    
    session()->setFlashdata('pesan','berhasil update tambah admin');
    return redirect()->to('/admin/datauser');
    }
    public function aturkelas() {
        $data = [
            'kelas' => $this->kelas_model->getData()
        ];
        return view("/admin/aturkelas",$data);
    }
    public function tambahkelas(){
        
      
        session()->setFlashdata('pesan', 'Data Berhasil ditambahkan');
       
        $data = [
            'id' => $this->request->getVar('id'),
            'nama' => $this->request->getVar('nama'),
            'singkatan' => $this->request->getVar('singkatan'),
        ];

        //return redirect()->to("/admin/aturkelas");
        return view("admin/tambahkelas",$data);
    }
    public function prosestambah(){
        $data = [
            'id' => $this->request->getVar('id'),
            'nama' => $this->request->getVar('nama'),
            'singkatan' => $this->request->getVar('singkatan'),
        ];
        session()->setFlashdata('pesan', 'Data Berhasil ditambahkan');
        $this->kelas_model->insert($data);


        return redirect()->to("/admin/aturkelas");
    }
    public function editkelas($id){
        $data = [
            'kelas' => $this->kelas_model->getDataFirst($id),
        ];

        return view("/admin/editkelas",$data);
    }
    public function updatekelas($id){
        $data = [
            'id' => $this->request->getPost('id'),
            'nama' => $this->request->getPost('nama'),
            'singkatan' => $this->request->getPost('singkatan'),
        ];

        $this->kelas_model->set($data);
        $this->kelas_model->where('id',$id);
        $this->kelas_model->update();
        session()->setFlashdata('pesan','berhasil update data kelas');
        return redirect()->to('/admin/aturkelas');
    }
    public function hapuskelas($id){
        $this->kelas_model->where('id',$id)->delete();
        session()->setFlashdata('pesan','berhasil hapus data kelas');
        return redirect()->to('/admin/aturkelas');
    }
    public function aturmateri(){
        $data= [
            'kelas' => $this->kelas_model->getData(),
            'materi' => $this->materi_model->getData(),
        ];
        return view("/admin/aturmateri",$data);
    }
    public function tambahmateri($id) {
        $data = [
            'kelas' => $this->kelas_model->getDataFirst($id),
        ];
        return view("/admin/tambahmateri",$data);
    }
    public function prosestambahmateri($id){
        $file = $this->request->getFile('video');
        //dd($file->getName());
        if($file->getName() === "") {
        $namafile = '';
        }
        else {
            $namafile = $file->getRandomName();
            $file->move('upload',$namafile);
        }
        $gambar = $this->request->getFile('gambar');
        if($gambar->getName() === "") {
            $namagambar = '';
            }
            else {
                $namagambar = $gambar->getRandomName();
                $gambar->move('upload',$namagambar);
            }
        $data = [
            'idkelas' => $id,
            'modul' => $this->request->getPost('modul'),
            'submodul' => $this->request->getPost('submodul'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'video' => $namafile,
            'gambar' => $namagambar,

        ];
        session()->setFlashdata('pesan', 'Data Berhasil ditambahkan');
        $this->materi_model->insert($data);


        return redirect()->to("/admin/aturmateri");
    }
    public function editmateri($submodul){
        $data = [
            'materi' => $this->materi_model->getDataFirst($submodul),
        ];

        return view("/admin/editmateri",$data);
    }
    public function updatemateri($submodul){
        $file = $this->request->getFile('video');
        //dd($file->getName());
        if($file->getName() === "") {
        $namafile = '';
        }
        else {
            $namafile = $file->getRandomName();
            $file->move('upload',$namafile);
        }
        $gambar = $this->request->getFile('gambar');
        if($gambar->getName() === "") {
            $namagambar = '';
            }
            else {
                $namagambar = $gambar->getRandomName();
                $gambar->move('upload',$namagambar);
            }
        $data = [
            'modulkelas' => $this->request->getPost('idkelas'),
            'modul' => $this->request->getPost('modul'),
            'submodul' => $this->request->getPost('submodul'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'file' => ($file ? $namafile : '') ,
            'gambar' => $namagambar ,
        ];

        $this->materi_model->set($data);
        $this->materi_model->where('submodul',$submodul);
        $this->materi_model->update();
        session()->setFlashdata('pesan','berhasil update data kelas');
        return redirect()->to('/admin/aturmateri');
    }
    public function hapusmateri($modul){
        $this->materi_model->where('submodul',$modul)->delete();
        session()->setFlashdata('pesan','berhasil hapus data kelas');
        return redirect()->to('/admin/aturmateri');
    }
 }