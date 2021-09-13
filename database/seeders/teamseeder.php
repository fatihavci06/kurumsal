<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class teamseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->insert([
        'name'=>'Fatih',
        'job'=>'Computer Engineer',
        'created_at'=>date('Y-m-d'),
        'updated_at'=>date('Y-m-d')
        
        ]);   
    }
}
