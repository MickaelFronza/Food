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
            'telefone' => '41 99999-9999',
            'cpf' => '446.291.880-02',
            
        ];

        $usuario_model->protect(false)->insert($usuario);


        $usuario = [
            'nome' => 'Fulano de Tal',
            'email' => 'fulano@email.com',
            'telefone' => '41 88888-9999',
            'cpf' => '419.255.360-09',
        ];

        $usuario_model->protect(false)->insert($usuario);

      //dd($usuario_model->erros());
    }
}
