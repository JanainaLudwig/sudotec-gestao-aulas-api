<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = \App\User::create([
            'name' => 'Admin SUDOTEC',
            'email' => 'admin@sudotec.test',
            'password' => bcrypt('12345678'),
            'type' => 'admin',
        ]);
    }
}
