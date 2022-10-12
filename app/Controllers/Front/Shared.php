<?php
namespace App\Controllers\Front;

use App\Controllers\Front\Public_Base;
class Shared extends Public_Base
{
    public function noFound(){
        return view('public/shared/no_found');
    }
}
