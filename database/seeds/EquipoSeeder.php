<?php

use Illuminate\Database\Seeder;
use App\Equipo;
use App\Disciplina;

class EquipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $disciplinaId = Disciplina::where('nombre', 'Futbol 8')->value('id');
        Equipo::create([
            'nombre' => 'Los Informaticos',
            'descripcion' => '',
            'disciplina_id' => $disciplinaId
        ]);
        Equipo::create([
            'nombre' => 'Los Tigres',
            'descripcion' => '',
            'disciplina_id' => $disciplinaId
        ]);
    }
}
