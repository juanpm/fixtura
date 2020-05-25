<?php

use Illuminate\Database\Seeder;

class CarreraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("carreras")->insert([
            'nombre' => 'Gastronomia',
            'created_at' => '2020/05/23',
            'updated_at' => '2020/05/23'
        ]);
        DB::table("carreras")->insert([
            'nombre' => 'Computacion e Informatica',
            'created_at' => '2020/05/23',
            'updated_at' => '2020/05/23'
        ]);
    }
}
