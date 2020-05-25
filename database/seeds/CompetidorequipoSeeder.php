<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompetidorequipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("competidorequipos")->insert([
            'matricula_id' => '1',
            'equipo_id' => '1',
            'created_at' => '2020-05-25',
            'updated_at' => '2020-05-25'
        ]);
        DB::table("competidorequipos")->insert([
            'matricula_id' => '1',
            'equipo_id' => '1',
            'created_at' => '2020-05-25',
            'updated_at' => '2020-05-25'
        ]);
    }
}
