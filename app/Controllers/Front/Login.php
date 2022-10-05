<?php

namespace App\Controllers\Front;

use App\Controllers\Front\Public_Base;
class Login extends Public_Base
{
    public function index()
    {

        helper("cookie");
        $data['cookie'] = [];
        $cData = get_cookie("username");
        if($cData){
            $data['cookie'] = json_decode($cData,true);
        }

        $session = session();

        if(isset($_POST['login'])){
            $flash['icon'] = 'error';
            $flash['title'] = 'Invalid Login Detail';
            $session->setFlashdata('eMessage', $flash);
            set_cookie("username",json_encode($_POST));

            $userModel = new \App\Models\Front\Login_Model();
            $data['basic'] = $userModel->login();

            $data['cookie']['email'] = $_POST['email'];
            $data['cookie']['password'] = $_POST['password'];
            // print_r($_POST);
            // die;
        }
        
        

     

        return $this->load_views('profile/login.php',$data);
    }
}
