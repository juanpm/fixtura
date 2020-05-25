<?php

use Illuminate\Database\Seeder;

class DisciplinaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("disciplinas")->insert([
            'nombre' => 'Futbol 8',
            'descripcion' => 'Masculino',
            'olimpiada_id' => '1',
            'created_at' => '2020/05/23',
            'updated_at' => '2020/05/23'
        ]);
        DB::table("disciplinas")->insert([
            'nombre' => 'Voley',
            'descripcion' => 'Mixto',
            'olimpiada_id' => '1',
            'created_at' => '2020/05/23',
            'updated_at' => '2020/05/23'
        ]);
    }
}
