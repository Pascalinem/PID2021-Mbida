<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            ArtistSeeder::class,
            RoleSeeder::class,
            TypeSeeder::class,
            LocalitySeeder::class,
            locationSeeder::class,
            ShowSeeder::class,
            RepresentationSeeder::class,
            ArtistTypeSeeder::class,
            ArtistTypeShowSeeder::class,
            UserSeeder::class,
            RoleUserSeeder::class,
            ReservationSeeder::class,
        ]);
    }
}
