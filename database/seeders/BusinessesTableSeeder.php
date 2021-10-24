<?php

namespace Database\Seeders;

use App\Models\Business;
use Illuminate\Database\Seeder;

class BusinessesTableSeeder extends Seeder
{
    public function run() {
        Business::factory()->count(5)->create();
    }
}