<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'name' => 'Admin SUDOTEC',
            'email' => 'admin@sudotec.test',
            'password' => bcrypt('12345678'),
            'type' => 'admin'
        ]);
    }
}
