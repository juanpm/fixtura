<?php

use Illuminate\Database\Seeder;

class SeccionperiodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("seccionperiodos")->insert([
            'nombre' => 'C06AN1-2020-2',
            'created_at' => '2020/05/23',
            'updated_at' => '2020/05/23'
        ]);
        DB::table("seccionperiodos")->insert([
            'nombre' => 'G06AN1-2020-2',
            'created_at' => '2020/05/23',
            'updated_at' => '2020/05/23'
        ]);
    }
}
