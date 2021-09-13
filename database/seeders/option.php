<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class option extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('options')->insert([
        'title1'=>'Başlık1',
        'title2'=>'Başlık2',
        'facebook'=>'face',
        'twitter'=>'tw',
        'instagram'=>'in',
        'skype'=>'sky',
        'linkedin'=>'link',
        'created_at'=>date('Y-m-d'),
        'updated_at'=>date('Y-m-d')
        
        ]);
    }
}
