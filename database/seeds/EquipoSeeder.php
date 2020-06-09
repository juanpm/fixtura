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
            'nombre' => 'Anonymous',
            'descripcion' => 'El poder del Conocimiento',
            'disciplina_id' => $disciplinaId
        ]);
        Equipo::create([
            'nombre' => 'Donatoss',
            'descripcion' => 'Creado Delicias',
            'disciplina_id' => $disciplinaId
        ]);
        Equipo::create([
            'nombre' => 'Monkycoins',
            'descripcion' => 'Pensando en Grande',
            'disciplina_id' => $disciplinaId
        ]);
        Equipo::create([
            'nombre' => 'Cuentaseguro',
            'descripcion' => 'Buscamos tu Seguridad',
            'disciplina_id' => $disciplinaId
        ]);
        Equipo::create([
            'nombre' => 'Designerstyle',
            'descripcion' => 'Ideas hechas Arte',
            'disciplina_id' => $disciplinaId
        ]);
    }
}
