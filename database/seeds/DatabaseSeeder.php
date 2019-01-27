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
        // $this->call(UsersTableSeeder::class);
        $this->call(CompaniesTableSeeder::class);
        $this->call(LocationsTableSeeder::class);
        $this->call(ManagersTableSeeder::class);
        $this->call(SafetySupervisorsTableSeeder::class);
        $this->call(SupervisorTableSeeder::class);
    }
}
