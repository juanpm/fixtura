<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OlimpiadaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("olimpiadas")->insert([
            'nombre' => 'Copa America Conti',
            'descripcion' => 'Vive al maximo',
            'fecha_inicio' => '2019-12-01',
            'fecha_fin' => '2019-12-03',
            'created_at' => '2020/05/23',
            'updated_at' => '2020/05/23'
        ]);
        DB::table("olimpiadas")->insert([
            'nombre' => 'Copa Libertadores Conti',
            'descripcion' => 'Descubre tu potencial',
            'fecha_inicio' => '2020-12-01',
            'fecha_fin' => '2020-12-03',
            'created_at' => '2020/05/23',
            'updated_at' => '2020/05/23'
        ]);
    }
}
