<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("personas")->insert([
            'codigo' => '1457859',
            'nombre' => 'Jose',
            'apellido' => 'Pantoja Hurtado',
            'dni' => '75489863',
            'fecha_nacimiento' => '1997-05-23',
            'telefono' => '985456123',
            'created_at' => '2020-05-25',
            'updated_at' => '2020-05-25'
        ]);
        DB::table("personas")->insert([
            'codigo' => '1427163',
            'nombre' => 'Maria',
            'apellido' => 'Ambrosio Prado',
            'dni' => '75458956',
            'fecha_nacimiento' => '1998-03-01',
            'telefono' => '929789369',
            'created_at' => '2020-05-25',
            'updated_at' => '2020-05-25'
        ]);
    }
}
