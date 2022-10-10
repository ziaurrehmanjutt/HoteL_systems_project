<?php

namespace App\Controllers\Front;

use App\Controllers\Front\Public_Base;
use App\Models\Front\Login_Model;

class Login extends Public_Base
{
    public function index()
    {
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
                        $flash['title'] = 'Login Successfully';

                        if(isset($_POST['remember_me'])){
                            set_cookie("username", json_encode($_POST));
                        }
                        if ($status['user_type'] == 'super_admin') {
                            return redirect()->route('admin/home');
                        }
                    } else {
                        $flash['icon'] = 'error';
                        $flash['title'] = 'Your Account is disabled';
                        $data['error'] = 'Your Account is disabled';
                    }
                } else {
                    $flash['icon'] = 'error';
                    $flash['title'] = 'Invalid Password for this User';
                    $data['error'] = 'Invalid Password for this User';
                }
            } else {
                $flash['icon'] = 'error';
                $flash['title'] = 'No User With This Email';
                $data['error'] = 'No User With This Email';
            }
            $session->setFlashdata('eMessage', $flash);

            $data['cookie']['email'] = $_POST['email'];
            $data['cookie']['password'] = $_POST['password'];
        }
        $data['languages'] = $loginModel->loadLanguages();
        ///
        return $this->load_views('profile/login.php', $data);
    }
}
