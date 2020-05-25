<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EquipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("equipos")->insert([
            'nombre' => 'Los Informaticos',
            'descripcion' => 'Computacion e Informatica',
            'disciplina_id' => '1',
            'created_at' => '2020/05/23',
            'updated_at' => '2020/05/23'
        ]);
        DB::table("equipos")->insert([
            'nombre' => 'Los Tigres',
            'descripcion' => 'Gastronomia',
            'disciplina_id' => '2',
            'created_at' => '2020/05/23',
            'updated_at' => '2020/05/23'
        ]);
    }
}
