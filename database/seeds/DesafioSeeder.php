<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DesafioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("desafios")->insert([
            'disciplina_id' => '1',
            'invitado' => 'Los Informaticos',
            'retador' => 'Los Conta',
            'puntaje' => '2',
            'ganador' => 'Los Informaticos',
            'parent_id' => '1',
            'fase' => 'Fase 1',
            'created_at' => '2020/05/23',
            'updated_at' => '2020/05/23'
        ]);
    }
}
