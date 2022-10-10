<?php

namespace App\Models\Front;
use App\Models\Front\Front_Base_Model;

class Login_Model extends Front_Base_Model
{
    function __construct(){
        parent::__construct();
    }
    function login($email){
        $builder =  $this->db->table('users');
        $builder->select('*')->where('user_email', $email);
        $result = $builder->get()->getRowArray();
        return $result;
    }
}