<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         contactseed::class; //bu yapılmalı
         teamseeder::class;
         sssseeder::class;
         testimonial::class;
         about::class;
         option::class;
         marka::class;
         UsersSeed::class;

    }
}
