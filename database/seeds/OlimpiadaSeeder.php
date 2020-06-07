<?php

use Illuminate\Database\Seeder;
use App\Olimpiada;

class OlimpiadaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Olimpiada::create([
            'nombre' => 'Copa America Conti',
            'descripcion' => '',
            'fecha_inicio' => '2019-12-01',
            'fecha_fin' => '2019-12-03'
        ]);
        Olimpiada::create([
            'nombre' => 'Copa Libertadores Conti',
            'descripcion' => '',
            'fecha_inicio' => '2020-12-01',
            'fecha_fin' => '2020-12-03'
        ]);
    }
}
