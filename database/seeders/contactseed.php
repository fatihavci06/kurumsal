<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class contactseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
        'adres'=>'Fatih',
        'email1'=>'Fatih',
        'email2'=>'Fatih',
        'telefon1'=>'Fatih',
        'telefon2'=>'Fatih',
        'aciklama'=>'Lorem ipsom dolor Lorem ipsom dolor',
        'created_at'=>date('Y-m-d'),
        'updated_at'=>date('Y-m-d')
        
        ]);
    }
}
