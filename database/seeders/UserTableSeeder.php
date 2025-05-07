<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       DB::table('users')->insert([



        
            //user
            [ 'name' => 'User',
            'username' => 'user',
            'password' => Hash::make('123'),
            'email' => 'user@gmail.com',
            'role' => 'user',
            'status' => 1,
            ],


            //admin
           [
             'name' => 'Admin',
            'username' => 'admin',
            'password' => Hash::make('123'),
            'email' => 'admin@gmail.com',
            'role' => 'admin',
            'status' => 1,
           ],

        //instructor
       [ 'name' => 'Instructor',
           'username' => 'instructor',
           'password' => Hash::make('123'),
           'email' => 'instructor@gmail.com',
           'role' => 'instructor',
           'status' => 1,
           ]

            ]);
    }
}
