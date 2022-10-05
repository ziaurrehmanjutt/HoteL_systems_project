<?php

namespace App\Models;

use CodeIgniter\Model;

class Super_Base_Model extends Model
{
    public $db;
    function __construct(){
        parent::__construct();
        $this->db = \Config\Database::connect();
    }
}