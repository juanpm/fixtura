<?php

use Illuminate\Database\Seeder;
use App\Matricula;
use App\Persona;
use App\Carrera;
use App\Seccionperiodo;

class MatriculaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $personaId = Persona::where('codigo', '1457859')->value('id');
        $carreraId = Carrera::where('nombre', 'Gastronomia')->value('id');
        $seccionperiodoId = Seccionperiodo::where('nombre', 'C06AN1-2020-2',)->value('id');
        Matricula::create([
            'persona_id' => $personaId,
            'carrera_id' => $carreraId,
            'seccionperiodo_id' => $seccionperiodoId
        ]);
        Matricula::create([
            'persona_id' => $personaId,
            'carrera_id' => $carreraId,
            'seccionperiodo_id' => $seccionperiodoId
        ]);
    }
}
