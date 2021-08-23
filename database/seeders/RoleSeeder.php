<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //empty the database
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        Role::Truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');

        //Define data
        $roles=[
            ['role'=>'admin',],
            ['role'=>'member',],
            ['role'=>'affiliate'],
        ];

        //Insert data
        DB::table('roles')->insert($roles);
    }
}
