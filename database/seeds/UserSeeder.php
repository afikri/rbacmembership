<?php

use Illuminate\Database\Seeder;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['name'=>'Alex Bohm', 'email'=>'alex@bohm.de', 'password'=>bcrypt('alex@bohm.de'), 'remember_token' => str_random(10)],
            ['name'=>'Betty Pohl', 'email'=>'betty@pohl.at', 'password'=>bcrypt('betty@pohl.at'), 'remember_token' => str_random(10)],
            ['name'=>'Carla Koch', 'email'=>'carla@koch.ch', 'password'=>bcrypt('carla@koch.ch'), 'remember_token' => str_random(10)],
        ]);
    }
}
