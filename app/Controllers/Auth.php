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
        $session = \Config\Services::session();
        
       if(!$this->validate([
            'username' => [
                'rules' => 'required|min_length[8]',
                'errors' => [
                    'required'=> '{field} harus diisi',
                    'min_length' => '{field} harus minimal terdiri dari 8 huruf',
                ],
            ],
            'password' => [
                'rules' => 'required|min_length[8]|regex_match[/^[A-Za-z0-9]+$/]',
                'errors' => [
                    'required' => '{field} harus diisi',
                    'min_length'=> '{field} minimal 8 karakter',
                    
                ],
            ],
        ]) )
        {
            $data = [
                'username' => $this->request->getPost('username'),
                'password' => $this->request->getPost('password'),
                'val' =>  \Config\Services::validation()
            ];
           
        return view('/auth/login.php',$data);

        } else 
        {
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');
            $user = $this->user_model->getWhere($username);
            if($user)
            {
                if(password_verify($password,$user['password'])) {
                    $data = [
                        'username' => $user['username'],
                        'datecreated' => $user['datecreated'],
                        'val' =>  \Config\Services::validation()
                        
                    ];
                    $session->set($data);
                    return view('/onboarding/interest',$data);
                }
                else {
                    $data = [
                        'username' => $user['username'],
                        'password' => '',
                        'val' =>  \Config\Services::validation()
                    ];
                    session()->setFlashdata('error','Password salah,silahkan coba lagi');
                    return view('/auth/login',$data);
                }

            }else {
                $data = [
                    'username' => '',
                    'password' => '',
                    'val' =>  \Config\Services::validation()
                ];
                session()->setFlashdata('error','Username tidak ada!');
                    return view('/auth/login',$data);
            }
        }
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
                'val' => \Config\Services::validation()
            ];
        
        return view('/auth/registrasi',$data);
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
            return view ('/auth/login');
        }
    }
    public function logout()
    {
        // unset($_SESSION['username']);
        //unset($_SESSION['role_id']);
        $session = \config\Services::session();
        $session->remove('username');
        session()->removeTempdata('username');

        session()->setFlashdata('pesan', 'Anda Berhasil Logout!');
        return redirect()->to(base_url('/auth/login'));
    }
}

?>