<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CursoSeeder extends Seeder {

    public function run($total = 1) {

        for($a=0; $a<$total; $a++) {
            DB::table('cursos')->insert([
                'nome' => Str::random(10),
                'tempo' => rand(2, 5),
            ]);
        }
    }
}
