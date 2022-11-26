<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
           //
           DB::table('category')->truncate();
      
           DB::table('category')->insert(
               array(
               'nombre' => 'Anillos',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),
         
           ));
           DB::table('category')->insert(
           array(
               'nombre' => 'Aretes',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),
       
           ));
   
           DB::table('category')->insert(
               array(
                   'nombre' => 'Brazaletes',
                   'created_at' => Carbon::now(),
                   'updated_at' => Carbon::now(),
           
               ));
   
           DB::table('category')->insert(
                   array(
                       'nombre' => 'Gafas',
                       'created_at' => Carbon::now(),
                       'updated_at' => Carbon::now(),
               
           ));
    }
}
