<?php

use Illuminate\Database\Seeder;
use App\Disciplina;
use App\Olimpiada;

class DisciplinaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $olimpiadaId = Olimpiada::where('nombre', 'Copa America Conti')->value('id');
        Disciplina::create([
            'nombre' => 'Futbol 8',
            'descripcion' => 'Masculino',
            'olimpiada_id' => $olimpiadaId
        ]);
        Disciplina::create([
            'nombre' => 'Voley',
            'descripcion' => 'Mixto',
            'olimpiada_id' => $olimpiadaId
        ]);
    }
}
