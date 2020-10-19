<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();
        DB::table('users')->insert([
            ['name' => 'Chyngyz',  'lastname' => 'Sydykov', 'email' => 'kuleshov.chyngyz@gmail.com', 'password' => Hash::make('pass')],
            ['name' => 'Manager',  'lastname' => 'Managerov', 'email' => 'manager@mimino.loc', 'password' => Hash::make('pass')],
            ['name' => 'Client',  'lastname' => 'Clientko', 'email' => 'client@mimino.loc', 'password' => Hash::make('pass')],
            ['name' => 'Pavel', 'lastname' => 'Kuleshov', 'email' => 'paulic@list.ru','password' => Hash::make('fkbyf90')],
        ]);

        DB::table('model_has_roles')->truncate();
        DB::table('model_has_roles')->insert([
            [
                'model_type' => 'App\User',
                'model_id' => '1',
                'role_id' => '3',
            ],
            [
                'model_type' => 'App\User',
                'model_id' => '4',
                'role_id' => '3',
            ],
            [
                'model_type' => 'App\User',
                'model_id' => '2',
                'role_id' => '2',
            ],
            [
                'model_type' => 'App\User',
                'model_id' => '3',
                'role_id' => '1',
            ]
        ]);
    }
}
