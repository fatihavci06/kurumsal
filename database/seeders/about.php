<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class about extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('abouts')->insert([
        'title'=>'Hakkımızda',
        'content'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit',
        'title2'=>'Corporis voluptates sit',
        'content2'=>'Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip',
        'title3'=>'Corporis voluptates sit',
        'content3'=>'Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip',
        'title4'=>'Corporis voluptates sit',
        'content4'=>'Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip',
        'title5'=>'Corporis voluptates sit',
        'content5'=>'Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip',
        'happyclients'=>1234,
        'projects'=>12,
        'workers'=>66,
        'created_at'=>date('Y-m-d'),
        'updated_at'=>date('Y-m-d')
        
        
        ]);
    }
}
