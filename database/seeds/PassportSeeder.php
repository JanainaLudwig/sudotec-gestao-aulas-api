<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PassportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('oauth_clients')->insert([
            [
                'id' => config('passport.access.client_id'),
                'name' => 'Laravel Personal Access Client',
                'secret' => config('passport.access.client_secret'),
                'redirect' => config('app.url'),
                'personal_access_client' => 1,
                'password_client' => 0,
                'revoked' => 0
            ],
            [
                'id' => config('passport.grant.client_id'),
                'name' => 'Laravel Password Grant Client',
                'secret' => config('passport.grant.client_secret'),
                'redirect' => config('app.url'),
                'personal_access_client' => 0,
                'password_client' => 1,
                'revoked' => 0
            ],
        ]);

        DB::table('oauth_personal_access_clients')->insert([
            [
                'client_id' => config('passport.access.client_id'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
