<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->call(OlimpiadaSeeder::class);
        $this->call(DisciplinaSeeder::class);
        $this->call(EquipoSeeder::class);
        $this->call(DesafioSeeder::class);
        $this->call(CarreraSeeder::class);
        $this->call(SeccionperiodoSeeder::class);
        $this->call(MatriculaSeeder::class);
        $this->call(PersonaSeeder::class);
        $this->call(CompetidorequipoSeeder::class);
    }
}
