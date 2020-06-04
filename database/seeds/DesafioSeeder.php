<?php

use Illuminate\Database\Seeder;
use App\Desafio;

class DesafioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Desafio::create([
            'disciplina_id' => '1',
            'invitado' => 'Los Informaticos',
            'retador' => 'Los Conta',
            'puntaje' => '2',
            'ganador' => 'Los Informaticos',
            'parent_id' => '1',
            'fase' => 'Fase 1'
        ]);
    }
}
