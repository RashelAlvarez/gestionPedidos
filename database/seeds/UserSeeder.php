<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->truncate();
      
        DB::table('users')->insert(
            array(
            'role_id' => '1',
            
       
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123456'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
      
            ));
            DB::table('users')->insert(
              array(
                'role_id' => '2',
             
     
                'email' => 'operador@gmail.com',
                'password' => Hash::make('123456'),
                'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),


              ));
              DB::table('users')->insert(
                array(
                  'role_id' => '3',
               
       
                  'email' => 'rashelalvarez21@gmail.com',
                  'password' => Hash::make('123456'),
                  'created_at' => Carbon::now(),
              'updated_at' => Carbon::now(),
  
  
                ));
    }
}
