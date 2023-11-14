<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder {
    
    public function run() {

        // MARCAS
        $data = [
            ["nome" => "VOLKSWAGEN"],
            ["nome" => "FIAT"],
            ["nome" => "JEEP"],
            ["nome" => "FORD"],
            ["nome" => "CHEVROLET"],
            ["nome" => "PEGEOUT"],
            ["nome" => "RENAULT"],
        ];
        DB::table('marcas')->insert($data);

        // CORES
        $data = [
            ["nome" => "PRETO"],
            ["nome" => "BRANCO"],
            ["nome" => "PRATA"],
            ["nome" => "CINZA"],
            ["nome" => "VERMELHO"],
            ["nome" => "AZUL"],
            ["nome" => "VINHO"],
        ];
        DB::table('cores')->insert($data);

        // MODELOS
        $data = [
            ["nome" => "T-CROSS", "marca_id" => 1],
            ["nome" => "POLO", "marca_id" => 1],
            ["nome" => "NIVUS", "marca_id" => 1],
            ["nome" => "ARGO", "marca_id" => 2],
            ["nome" => "PULSE", "marca_id" => 2],
            ["nome" => "TORO", "marca_id" => 2],
            ["nome" => "RENEGADE", "marca_id" => 3],
            ["nome" => "COMMANDER", "marca_id" => 3],
            ["nome" => "COMPASS", "marca_id" => 3],
            ["nome" => "TERRITORY", "marca_id" => 4],
            ["nome" => "MUSTANG", "marca_id" => 4],
            ["nome" => "FOCUS", "marca_id" => 4],
            ["nome" => "ONIX", "marca_id" => 5],
            ["nome" => "TRACKER", "marca_id" => 5],
            ["nome" => "MONTANA", "marca_id" => 5],
            ["nome" => "208", "marca_id" => 6],
            ["nome" => "2008", "marca_id" => 6],
            ["nome" => "3008", "marca_id" => 6],
            ["nome" => "KWID", "marca_id" => 7],
            ["nome" => "CAPTUR", "marca_id" => 7],
            ["nome" => "DUSTER", "marca_id" => 7],
        ];
        DB::table('modelos')->insert($data);

        // VEÍCULOS
        $data = [
            ["placa" => "MZX-6815", "modelo_id" => 1, "cor_id" => 1],
            ["placa" => "LVA-5073", "modelo_id" => 4, "cor_id" => 2],
            ["placa" => "NAN-9242", "modelo_id" => 10, "cor_id" => 3],
            ["placa" => "MQH-5674", "modelo_id" => 6, "cor_id" => 5],
            ["placa" => "MOE-2177", "modelo_id" => 20, "cor_id" => 2],
            ["placa" => "NEJ-2422", "modelo_id" => 12, "cor_id" => 6],
            ["placa" => "JLI-5643", "modelo_id" => 3, "cor_id" => 7],
            ["placa" => "HRU-4977", "modelo_id" => 9, "cor_id" => 2],
            ["placa" => "MTO-1084", "modelo_id" => 18, "cor_id" => 3],
            ["placa" => "JTL-2264", "modelo_id" => 15, "cor_id" => 5],
            ["placa" => "JZW-5390", "modelo_id" => 11, "cor_id" => 6],
            ["placa" => "HTK-8171", "modelo_id" => 7, "cor_id" => 1],
            ["placa" => "NEC-3438", "modelo_id" => 10, "cor_id" => 5],
            ["placa" => "AJZ-2088", "modelo_id" => 8, "cor_id" => 6],
            ["placa" => "KAG-7323", "modelo_id" => 6, "cor_id" => 1],
            ["placa" => "GIL-7281", "modelo_id" => 13, "cor_id" => 5],
        ];
        DB::table('veiculos')->insert($data);
    }
}
