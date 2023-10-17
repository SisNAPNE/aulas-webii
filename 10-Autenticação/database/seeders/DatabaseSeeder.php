<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // TIPOS DE USUÁRIOS
        $data = [
            ["nome" => "PROFESSOR"],
            ["nome" => "COORDENADOR"],
            ["nome" => "DIRETOR"],
        ];
        DB::table('types')->insert($data);

        // PERMISSÕES
        $data = [
            // Professor
            ["regra" => "curso.index", "permissao" => 1, "type_id" => 1],
            ["regra" => "curso.create", "permissao" => 0, "type_id" => 1],
            ["regra" => "curso.edit", "permissao" => 0, "type_id" => 1],
            ["regra" => "curso.show", "permissao" => 1, "type_id" => 1],
            ["regra" => "curso.destroy", "permissao" => 0, "type_id" => 1],
            // Coordenador
            ["regra" => "curso.index", "permissao" => 1, "type_id" => 2],
            ["regra" => "curso.create", "permissao" => 1, "type_id" => 2],
            ["regra" => "curso.edit", "permissao" => 0, "type_id" => 2],
            ["regra" => "curso.show", "permissao" => 1, "type_id" => 2],
            ["regra" => "curso.destroy", "permissao" => 0, "type_id" => 2],
            // Diretor
            ["regra" => "curso.index", "permissao" => 1, "type_id" => 3],
            ["regra" => "curso.create", "permissao" => 1, "type_id" => 3],
            ["regra" => "curso.edit", "permissao" => 1, "type_id" => 3],
            ["regra" => "curso.show", "permissao" => 1, "type_id" => 3],
            ["regra" => "curso.destroy", "permissao" => 1, "type_id" => 3],
        ];
        DB::table('permissions')->insert($data);
    }
}

