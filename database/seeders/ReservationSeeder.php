<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Representation;
use App\Models\Reservation;

class ReservationSeeder extends Seeder
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
        DB::table('reservations')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');

         //Define data
         $reservations = [
            [
                'user_firstname'=>'Test1',
                'user_lastname'=>'User1',
                'representation'=>'3',
                'places'=>123,
            ],
            [
                'user_firstname'=>'Test2',
                'user_lastname'=>'User2',
                'representation'=>'4',
                'places'=>89,
            ],
            [
                'user_firstname'=>'Test1',
                'user_lastname'=>'User1',
                'representation'=>'2',
                'places'=>250,
            ],
            [
                'user_firstname'=>'Test4',
                'user_lastname'=>'User4',
                'representation'=>'1',
                'places'=>50,
            ],
         
        ];
        
        //Prepare the data
        foreach ($reservations as &$data) {
            
            //Search the user for a given user's firstname and lastname
            $user = User::where([
                ['firstname','=',$data['user_firstname'] ],
                ['lastname','=',$data['user_lastname'] ]
            ])->first();


            //Search the representation for a given representation
            $representation = Representation::firstWhere('id','=',$data['representation']);
            
           
            
            unset($data['user_firstname']);
            unset($data['user_lastname']);
            unset($data['representation']);
           
            $data['user_id'] = $user->id;
            $data['representation_id'] = $representation->id;
        }
        unset($data);

        //Insert data in the table
        DB::table('reservations')->insert($reservations);
    }
}
