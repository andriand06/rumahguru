<?php

namespace App\Controllers;



class dashboard extends BaseController
{
    protected $session;
    public function __construct()
    {
        $this->session = \Config\Services::session();
    }
    public function index()
    {
        $username = $this->session->get('username');
        $data = [
            'username' => $username,
        ];
        return view('dashboard/index',$data);
    }
}

?>