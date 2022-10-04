<?php
namespace App\Controllers\Front;
use App\Controllers\BaseController;

class Public_Base extends BaseController
{
    public function index()
    {
        echo "123";die;
        return view('welcome_message');
    }
}
