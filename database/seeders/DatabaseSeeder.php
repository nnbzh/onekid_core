<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(GendersTableSeeder::class);
         $this->call(ClassCategoriesTableSeeder::class);
         $this->call(BusinessesTableSeeder::class);
         $this->call(CentresTableSeeder::class);
         $this->call(ClassTemplatesTableSeeder::class);
    }
}
