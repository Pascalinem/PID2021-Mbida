<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Role;
use App\Models\RoleUser;

class RoleUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //     Empty the table first
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('role_user')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');

         //Define data
         $roleUsers = [
            [
                'user_firstname'=>'Test1',
                'user_lastname'=>'User1',
                'role'=>'admin',
            ],
            [
                'user_firstname'=>'Test2',
                'user_lastname'=>'User2',
                'role'=>'member',
            ],
            [
                'user_firstname'=>'Test3',
                'user_lastname'=>'User3',
                'role'=>'member',
            ],
            [
                'user_firstname'=>'Test4',
                'user_lastname'=>'User4',
                'role'=>'affiliate',
            ],
         
        ];
        
        //Prepare the data
        foreach ($roleUsers as &$data) {
            
            //Search the user for a given user's firstname and lastname
            $user = User::where([
                ['firstname','=',$data['user_firstname'] ],
                ['lastname','=',$data['user_lastname'] ]
            ])->first();


            //Search the role for a given role
            $role = role::firstWhere('role','=',$data['role']);
            
           
            
            unset($data['user_firstname']);
            unset($data['user_lastname']);
            unset($data['role']);
           
            $data['user_id'] = $user->id;
            $data['role_id'] = $role->id;
        }
        unset($data);

        //Insert data in the table
        DB::table('role_user')->insert($roleUsers);
    }
}
