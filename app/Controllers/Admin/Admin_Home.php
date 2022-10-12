<?php

namespace App\Controllers\Admin;

use App\Controllers\Admin\Admin_Base;
use App\Models\Admin\Admin_Home_Model;
class Admin_Home extends Admin_Base
{
    private $adminHomeModel;
    public function __construct(){
        parent::__construct();
        $this->adminHomeModel = new Admin_Home_Model();
    }
    public function index()
    {
        $data['list_branches'] = $this->adminHomeModel->all_branches();
        return $this->load_views('sites/sites.php',$data);
    }
    public function addSite()
    {
        if (isset($_POST['add_branch'])) {
            $rules = [
                "branch_name" => "required",
            ];

            $messages = [
                "branch_name" => [
                    "required" => "Name is required",
                ]
            ];

            if ($this->validate($rules, $messages)) {

                $data = [
                    'branch_name' => $this->request->getVar('branch_name'),
                    'branch_address' => $this->request->getVar('branch_address'),
                    'branch_zip' => $this->request->getVar('branch_zip'),
                    'branch_lat' => $this->request->getVar('branch_lat'),
                    'branch_lng' => $this->request->getVar('branch_lng')
                ];
                $this->adminHomeModel->add_branch($data);
                return redirect()->to(getCurrentLocal().'/admin/home');
                //add_branch
            }
        }
        return $this->load_views('sites/add_site.php', [], 'sites/add_site_js');
    }
    public function updateSite($id)
    {
        $data['list_branches'] = $this->adminHomeModel->single_branch($id);
        if(!$data['list_branches']){
            return redirect()->to(getCurrentLocal().'/error/404');
        }
        if (isset($_POST['add_branch'])) {
            $rules = [
                "branch_name" => "required",
            ];

            $messages = [
                "branch_name" => [
                    "required" => "Name is required",
                ]
            ];

            if ($this->validate($rules, $messages)) {

                $data = [
                    'branch_name' => $this->request->getVar('branch_name'),
                    'branch_address' => $this->request->getVar('branch_address'),
                    'branch_zip' => $this->request->getVar('branch_zip'),
                    'branch_lat' => $this->request->getVar('branch_lat'),
                    'branch_lng' => $this->request->getVar('branch_lng')
                ];
                $this->adminHomeModel->add_branch($data);
                return redirect()->to(getCurrentLocal().'/admin/home');
                //add_branch
            }
        }
        return $this->load_views('sites/add_site.php', [], 'sites/add_site_js');
    }
}
