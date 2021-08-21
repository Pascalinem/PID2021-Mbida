<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Type;


class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Empty table
        Type::truncate();

        //Define data
        $types=[
            ['type'=>'auteur'],
            ['type'=>'scénographe'],
            ['type'=>'comédien'],
            ['type'=>'distributeur'],

        ];

        //Insert data
        DB::table('types')->insert($types);

    }
}
