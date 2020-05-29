<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rols')->insert([
            'nombre' => 'administrador',
        ]);
        DB::table('rols')->insert([
            'nombre' => 'contador',
        ]);
        DB::table('rols')->insert([
            'nombre' => 'supervisor',
        ]);
        DB::table('rols')->insert([
            'nombre' => 'cajero',
        ]);
        //
    }
}
