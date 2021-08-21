<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Locality;
use Illuminate\Support\Facades\DB;

class LocalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Empty tale first
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        Locality::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');

        //Define data
        $localities=[
            ['postal_code'=>'1000','locality'=>'Bruxelles'],
            ['postal_code'=>'1170','locality'=>'Watermael-Boitsfort'],
        ];

        //insert data
        DB::table('localities')->insert($localities);

    }
}
