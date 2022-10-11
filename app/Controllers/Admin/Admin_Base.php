<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Admin_Base extends BaseController
{
    public function __construct(){
        helper('cookies_helper');
    }
    public function index()
    {
        echo "123";
        die;
        return view('welcome_message');
    }

    public function load_views($page, $page_data = [], $js_page = "", $js_data = [], $header_data = [], $footer_data = [])
    {
        $pages = view('admin/parts/header.php', $header_data)
            . view("admin/". $page, $page_data)
            . view('admin/parts/footer.php', $footer_data);

        if ($js_page) {
            $pages .= view('admin/'.$js_page, $js_data);
        }
        return $pages;
    }
}
