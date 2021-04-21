<?php
namespace App\Controllers;

use App\Models\interest_model;
use PhpParser\Node\Expr\AssignOp\Concat;

class Onboarding extends BaseController{
    protected $interest_model;
    protected $session;
    public function __construct()
    {
        $this->session = \Config\Services::session();
        $this->cek_status();
        $this->interest_model = new interest_model();

    }
    public function interest()
    {
        $username = $this->session->get('username');
        
        if($this->cek_status())
        {
            $this->cek_status();
            return redirect()->to('/auth/login');
        }
        if(!$this->validate([
            'phone' => [
                'rules' => 'required|numeric',
                'error' => [
                    'required' => '{field} harus diisi',
                    'numeric' => "{field} harus berupa angka",
                ],
            ],
            'interest' => [
                'rules' => 'required',
                'error' => [
                    'required' => ' {field} harus diisi',
                ],
            ],
        ]))
        {
            $data = [
                'username' => $this->session->get('username'),
                'phone' => $this->request->getPost('phone'),
                'interest' => $this->request->getPost('interest'),
                'val' =>  \Config\Services::validation(),
                'check' => '1',
            ];
            return view('/onboarding/interest',$data);
        }
        else {
            $phone = $this->request->getPost('phone');
          
            if($_POST){
            $check = $this->request->getPost('interest');
            $interest = $check;
            $this->interest_model->insertInterest([
                'interest' => implode(",",$interest),
                'username' => $this->session->get('username'),
                'id'=> '',
                'phone' => $phone,
                'check' => '1',
                
                'val' =>  \Config\Services::validation()
            ]);
        }
            session()->setFlashdata('pesan','Data berhasil dikirim!');
            return redirect()->to('/dashboard/index');
        }
        
    }
}
?>