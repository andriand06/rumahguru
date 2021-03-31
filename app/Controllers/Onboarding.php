<?php
namespace App\Controllers;

class Onboarding extends BaseController{
    public function __construct()
    {
        $this->cek_status();
    }
    public function interest()
    {
        if($this->cek_status())
        {
            dd($this->cek_status());
            return redirect()->to('/auth/login');
        }
        return view('/onboarding/interest');
    }
}
?>