<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function __construct()
	{
		$this->cek_status();
	}
	public function index()
	{
		if($this->cek_status())
        {
            $this->cek_status();
            return redirect()->to('/auth/login');
        }
		echo view('home/home');
	}
}
