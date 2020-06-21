<?php

use Illuminate\Database\Seeder;
use App\Persona;

class PersonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Persona::create([
            'codigo' => '1457859',
            'nombre' => 'Jose',
            'apellido' => 'Pantoja Hurtado',
            'dni' => '75489863',
            'fecha_nacimiento' => '1997-05-23',
            'telefono' => '985456123'
        ]);
        Persona::create([
            'codigo' => '1427163',
            'nombre' => 'Alberto',
            'apellido' => 'Ambrosio Prado',
            'dni' => '75458956',
            'fecha_nacimiento' => '1998-03-01',
            'telefono' => '929789369'
        ]);
        Persona::create([
            'codigo' => '1417789',
            'nombre' => 'Marcelo',
            'apellido' => 'Granados Pino',
            'dni' => '75458956',
            'fecha_nacimiento' => '1998-03-01',
            'telefono' => '929789369'
        ]);
        Persona::create([
            'codigo' => '1821025',
            'nombre' => 'Luis',
            'apellido' => 'Paredes Quintanilla',
            'dni' => '75458956',
            'fecha_nacimiento' => '1998-03-01',
            'telefono' => '929789369'
        ]);
    }
}
