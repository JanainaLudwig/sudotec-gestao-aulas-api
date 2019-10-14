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
         $this->call(PassportSeeder::class);
         $this->call(UsersSeeder::class);
         $this->call(ProjectsSeeder::class);
         $this->call(CoursesSeeder::class);
         $this->call(GradesSeeder::class);
         $this->call(StudentsSeeder::class);
    }
}
