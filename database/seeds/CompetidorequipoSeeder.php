<?php

use Illuminate\Database\Seeder;
use App\Competidorequipo;
use App\Matricula;
use App\Equipo;

class CompetidorequipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $matriculaId = Matricula::where('id', '1')->value('id');
        $equipoId = Equipo::where('nombre', 'Los Informaticos',)->value('id');
        Competidorequipo::create([
            'matricula_id' => $matriculaId,
            'equipo_id' => $equipoId
        ]);
        Competidorequipo::create([
            'matricula_id' => $matriculaId,
            'equipo_id' => $equipoId
        ]);
    }
}
