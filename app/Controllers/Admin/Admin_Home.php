<?php

namespace App\Controllers\Admin;
use App\Controllers\Admin\Admin_Base;

class Admin_Home extends Admin_Base
{
    public function index()
    {
        return $this->load_views('sites/sites.php');
    }
    public function addSite()
    {
        return $this->load_views('sites/add_site.php',[],'sites/add_site_js');
    }
}
