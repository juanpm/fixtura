<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Duilio Palacios',
            'email' => 'duilio@styde.net',
            'password' => bcrypt('laravel')
        ]);

        factory(User::class)->times(17)->create();
    }
}
