<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Testes extends BaseController
{
    public function index()
    {
        return view('Testes/index.php');
    }
    public function novo() {
        echo 'Esse é mais um método do controller Testes';
    }
}


