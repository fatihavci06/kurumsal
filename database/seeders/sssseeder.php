<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class sssseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ssss')->insert([
        'soru'=>'Soru',
        'cevap'=>'Cevap',
        'created_at'=>date('Y-m-d'),
        'updated_at'=>date('Y-m-d')
        
        
        ]);
    }
}
