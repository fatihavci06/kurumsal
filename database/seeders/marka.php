<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class marka extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i <8 ; $i++) { 
            // code...
       
        DB::table('markas')->insert([
        'name'=>$i,
        'image'=>'/uploads/clients/client-'.$i.'.png',
        
        'created_at'=>date('Y-m-d'),
        'updated_at'=>date('Y-m-d')
        
        ]);
         }
    }
}
