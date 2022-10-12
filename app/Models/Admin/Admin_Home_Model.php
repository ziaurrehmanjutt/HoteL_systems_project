<?php

namespace App\Models\Admin;
use App\Models\Admin\Admin_Base_Model;

class Admin_Home_Model extends Admin_Base_Model
{
    function __construct(){
        parent::__construct();
    }
    function add_branch($data){
        $builder =  $this->db->table('branches');
        return $builder->insert($data);
    }
    function all_branches(){
        $builder =  $this->db->table('branches');
        $builder->select('*')->where('status !=', 'deleted');
        $result = $builder->get()->getResultArray();
        return $result;
    }
    function single_branch($id){
        $builder =  $this->db->table('branches');
        $builder->select('*')->where('branch_id',$id);
        $result = $builder->get()->getResultArray();
        return $result;
    }
}