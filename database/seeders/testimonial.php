<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class testimonial extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('testimonials')->insert([
        'name'=>'Fatig',
        'job'=>'Engineer',
        'comment'=>'Lorem ipsom dolor',
        'created_at'=>date('Y-m-d'),
        'updated_at'=>date('Y-m-d')
        
        
        ]);

    }
}
