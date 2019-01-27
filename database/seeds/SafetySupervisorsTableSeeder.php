<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SafetySupervisorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('safety_supervisors')->insert([
            'name' => 'Syamsudin',
        ]);
    }
}
