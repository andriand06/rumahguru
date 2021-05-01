<?php

namespace App\Controllers;

use App\Models\kota_model;
use App\Models\pekerjaan_model;
use App\Models\profile_model;
use App\Models\user_model;

Class Profile extends BaseController
{
    
    protected $session;
   protected $user_model;
   protected $kota_model;
   protected $pekerjaan_model;
   protected $profile_model;
    public function __construct()
    {
        $this->session = \Config\Services::session();
        $this->email = \Config\Services::email();
        $this->user_model = new user_model();
        $this->kota_model = new kota_model();
        $this->pekerjaan_model = new pekerjaan_model();
        $this->profile_model = new profile_model();
        $this->cek_status();
    }
    public function index()
    {
        $username = $this->session->get('username');
        $trial = $this->session->get('trial');
        //dd($trial);
        $data = [
            'username' => $username,
            'trial' => $trial,
            'isactive' => $this->session->get('is_active'),
            'isi' => $this->user_model->getWhere($username),
            'kota1' => $this->kota_model->getData(),
            'pekerjaan1' => $this->pekerjaan_model->getData(),
            'val' =>  \Config\Services::validation(),
        ];
        return view('profile/index',$data);
    }
    public function save()
    {
        $username = $this->session->get('username');
        $trial = $this->session->get('trial');
        if(!$this->validate([
            'namalengkap' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'nama lengkap harus diisi',
                ],
            ],
            'username' => [
                'rules' => 'required|min_length[8]',
                'errors' => [
                    'required' => '{field} harus diisi',
                    'min_length' => '{field} minimal terdiri dari 8 huruf',
                ],
            ],
            'notelp' => [
                'rules' => 'required|numeric',
                'errors' => [
                    'required' => 'no telepon harus diisi',
                    'numeric' => 'no telepon harus berupa angka',
                ],
            ],
            'kota' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi',
                   
                ],
            ],
            'kotattl' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'tempat lahir harus diisi',
                   
                ],
            ],
            'tanggallahir' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'tanggal lahir harus diisi',
                ],
            ],
            'pendidikan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi',
                   
                ],
            ],
            'perusahaan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'nama {field} harus diisi',
                   
                ],
            ],
            'pekerjaan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi',
                   
                ],
            ],
            
        ])) {
            $data = [
                'username' => $username,
                'trial' => $trial,
                'isactive' => $this->session->get('is_active'),
                'isi' => $this->user_model->getWhere($username),
                'kota1' => $this->kota_model->getData(),
                'pekerjaan1' => $this->pekerjaan_model->getData(),
                'namalengkap' => $this->request->getPost('namalengkap'),
                'username' => $this->request->getPost('username'),
                'notelp' => $this->request->getPost('notelp'),
                
                
                
                'perusahaan' => $this->request->getPost('perusahaan'),
                
                'val' =>  \Config\Services::validation(),
        ];
        return view('profile/index',$data);
            
        } else 
        {
            $data = [
                'id' => '',
                'namalengkap' => $this->request->getPost('namalengkap'),
                'username' => $this->request->getPost('username'),
                'notelp' => $this->request->getPost('notelp'),
                'kota' => $this->request->getPost('kota'),
                'kotattl' => $this->request->getPost('kotattl'),
                'tanggallahir' => $this->request->getPost('tanggallahir'),
                'pendidikan' => $this->request->getPost('pendidikan'),
                'perusahaan' => $this->request->getPost('perusahaan'),
                'pekerjaan' => $this->request->getPost('pekerjaan'),
                'status' => '1',
            ];
            $this->profile_model->insertData($data);
            $data1 =[
                'status' => '1'
            ];
            $this->session->set($data1);
            session()->setFlashdata('pesan','Data Profile Anda berhasil disimpan');
            return redirect()->to('/dashboard/index');
        }
    }
}