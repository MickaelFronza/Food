<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    public function run()
    {
        $usuario_model = new \App\Models\UsuarioModel;

        $usuario = [
            'nome' => 'Mickael Fronza',
            'email' => 'admin@admin.com',
            'telefone' => '41 99514-0996'
        ];

        $usuario_model->protect(false)->insert($usuario);


        $usuario = [
            'nome' => 'Larissa Fronza',
            'email' => 'larissa@admin.com',
            'telefone' => '41 99213-7945'
        ];

        $usuario_model->protect(false)->insert($usuario);

      dd($usuario_model->erros());
    }
}
