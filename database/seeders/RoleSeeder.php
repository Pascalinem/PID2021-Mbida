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
        Role::Truncate();

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
