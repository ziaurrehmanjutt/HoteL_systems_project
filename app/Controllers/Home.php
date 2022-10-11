<?php

namespace App\Controllers;
use CodeIgniter\HTTP\IncomingRequest;
class Home extends BaseController
{
    
    function __construct(){
    }
    public function index()
    {
        die;
        return view('welcome_message');
    }

}
