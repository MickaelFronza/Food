<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Testes extends BaseController
{
    public function index()
    {

        $data = [ 
            'titulo' => 'Sistema de entrega',
            'subtitulo'  => 'Muito Legal',

        ];
        return view('Testes/index.php', $data);
    }
    public function novo() {
        echo 'Esse é mais um método do controller Testes';
    }
}


