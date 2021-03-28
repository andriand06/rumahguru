<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\user_model;
use CodeIgniter\I18n\Time;

class Auth extends BaseController
{
    protected $user_model;
   
    public function __construct()
    {
        $this->user_model = new user_model();
    }
    public function login()
    {
        echo view('auth/login');
    }
    public function registrasi()
    {
       
       $val = $this->validate([
            'namalengkap' => [
                'rules' => 'required|min_length[8]',
                'errors' => [
                    'required' => '{field} harus diisi',
                    'min_length' => '{field} minimal terdiri dari 8 huruf',
                ]
            ],
            'username' => [
                'rules' =>'required|is_unique[user.username]|min_length[8]',
                'errors ' => [
                    'required' => '{field} harus diisi',
                    'is_unique' =>  '{field} sudah ada',
                    'min_length' => '{field} minimal terdiri dari 8 huruf',
                ]
            ],
            'email' => [
                'rules' =>'required|valid_email|is_unique[user.email]',
                'errors' => [
                    'required' => '{field} harus diisi',
                    'valid_email' => '{field} harus dalam format email',
                    'is_unique' => '{field} sudah ada',
                ]
            ],
            'password ' => [
                'rules' => 'required|min_length[8]|regex_match[/^[A-Za-z0-9]+$/]',
                'errors' => [
                    'required'=> '{field} harus diisi',
                    'min_length' => '{field} minimal terdiri dari 8 huruf',
                    'regex_match' => '{field} harus terdiri dari  1 huruf Kapital dan memiliki angka',
                ], 
            ],
            'konfirmasipassword' => [
				'rules' => 'required|matches[password]',
				'errors' => [
					'required' => '{field} harus diisi',
					'matches' => '{field} harus sama dengan password',
				]
			],
            
        ]);
        if($val == false) {

            $data = [
                'namalengkap' => $this->request->getPost('namalengkap'),
                'username' => $this->request->getPost('username'),
                'email' => $this->request->getPost('email'),
                'password' => $this->request->getPost('password'),
                'konfirmasipassword' => $this->request->getPost('konfirmasipassword'),
                'val' => \Config\Services::validation(),
            ];
        
        return view('auth/registrasi',$data);
        } else {
            $data = [
                'id' => '',
                'namalengkap' => htmlspecialchars($this->request->getPost('namalengkap')),
                'username' => htmlspecialchars($this->request->getPost('username')),
                'email' => htmlspecialchars($this->request->getPost('email')),
                'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
                'konfirmasipassword' => password_hash($this->request->getPost('konfirmasipassword'),PASSWORD_DEFAULT),
                'datecreated' => new Time('now'),
            ];
            $this->user_model->insertUser($data);
            session()->setFlashdata('pesan','Anda berhasil registrasi!');
            return redirect()->to('/auth/login');
        }
    }
}

?>