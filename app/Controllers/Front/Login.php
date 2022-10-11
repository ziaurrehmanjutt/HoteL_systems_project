<?php

namespace App\Controllers\Front;

use App\Controllers\Front\Public_Base;
use App\Models\Front\Login_Model;
use App\Models\Super_Base_Model;

class Login extends Public_Base
{
    public function index()
    {
        helper('cookie');
        $data['cookie'] = [];
        $cData = get_cookie("username");
        if ($cData) {
            $data['cookie'] = json_decode($cData, true);
        }

        $session = session();
        $data['error'] = "";
        if (isset($_POST['login'])) {
            $loginModel = new Login_Model();
            $email = $this->request->getVar('email');
            $password = $this->request->getVar('password');
            $status = $loginModel->login($email);
            if ($status) {
                if (md5($password) == $status['user_password']) {
                    if ($status['status'] == 'active') {
                        $flash['icon'] = 'success';
                        $flash['title'] = lang('public/Profile.login.login_ok');

                        if(isset($_POST['remember_me'])){
                            set_cookie("username", json_encode($_POST));
                        }
                        if ($status['user_type'] == 'super_admin') {
                            return redirect()->to($this->current_language.'/admin/home');
                        }
                    } else {
                        $flash['icon'] = 'error';
                        $flash['title'] = lang('public/Profile.login.account_disable');
                        $data['error'] = lang('public/Profile.login.account_disable');
                    }
                } else {
                    $flash['icon'] = 'error';
                    $flash['title'] = lang('public/Profile.login.invalid_password');
                    $data['error'] = lang('public/Profile.login.invalid_password');
                }
            } else {
                $flash['icon'] = 'error';
                $flash['title'] = lang('public/Profile.login.no_user_email');
                $data['error'] = lang('public/Profile.login.no_user_email');
            }
            $session->setFlashdata('eMessage', $flash);

            $data['cookie']['email'] = $_POST['email'];
            $data['cookie']['password'] = $_POST['password'];
        }
        $sModel = new Super_Base_Model();
        $data['languages'] =  $sModel ->loadLanguages();
        $data['current'] =  $this->current_language;
        
        ///
        return $this->load_views('profile/login.php', $data);
    }
}
