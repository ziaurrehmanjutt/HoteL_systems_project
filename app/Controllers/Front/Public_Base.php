<?php

namespace App\Controllers\Front;

use App\Controllers\BaseController;

class Public_Base extends BaseController
{
    public function index()
    {
        echo "123";
        die;
        return view('welcome_message');
    }

    public function load_views($page, $page_data = [], $js_page = "", $js_data = [], $header_data = [], $footer_data = [])
    {
        $pages = view('public/profile/parts/header.php', $header_data)
            . view('public/' . $page, $page_data)
            . view('public/profile/parts/footer.php', $footer_data);

        if ($js_page) {
            $pages .= view('public/profile/parts/footer.php', $js_data);
        }
        return $pages;
    }
}
