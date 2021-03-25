<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Auth extends BaseController
{
    public function login()
    {
        echo view('auth/login');
    }
    public function registrasi()
    {
        echo view('auth/registrasi');
    }
}

?>