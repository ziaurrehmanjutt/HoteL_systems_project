<?php
namespace App\Controllers\Front;
use App\Controllers\Front\Public_Base;


class Login extends Public_Base
{
    public function index()
    {
        return view('public/profile/login.php');
    }
}
