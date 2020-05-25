<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MatriculaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("matriculas")->insert([
            'persona_id' => '1',
            'carrera_id' => '1',
            'seccionperiodo_id' => '1',
            'created_at' => '2020-05-25',
            'updated_at' => '2020-05-25'
        ]);
        DB::table("matriculas")->insert([
            'persona_id' => '1',
            'carrera_id' => '1',
            'seccionperiodo_id' => '1',
            'created_at' => '2020-05-25',
            'updated_at' => '2020-05-25'
        ]);
    }
}
