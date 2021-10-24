<?php

namespace Database\Seeders;

use App\Models\Centre;
use Illuminate\Database\Seeder;

class CentresTableSeeder extends Seeder
{
    public function run() {
        Centre::factory()->count(10)->create();
    }
}