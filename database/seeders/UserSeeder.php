<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Empty the table first
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        User::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
        //Define data

        $users=[

            [
                'login'=>'test1',
                'password'=>'test1',
                'firstname'=>'Test1',
                'lastname'=>'User1',
                'email'=>'test1@mail.be',
                'langue'=>'FR',
               
            ],
            [
                'login'=>'test2',
                'password'=>'test2',
                'firstname'=>'Test2',
                'lastname'=>'User2',
                'email'=>'test2@mail.be',
                'langue'=>'NL',
               
            ],
            [
                'login'=>'test3',
                'password'=>'test3',
                'firstname'=>'Test3',
                'lastname'=>'User3',
                'email'=>'test3@mail.be',
                'langue'=>'en',
               
            ],
            [
                'login'=>'test4',
                'password'=>'test4',
                'firstname'=>'Test4',
                'lastname'=>'User4',
                'email'=>'test4@mail.be',
                'langue'=>'fr',
                
            ],
        ];

        //Insert data
        DB::table('users')->insert($users);
    }
}
