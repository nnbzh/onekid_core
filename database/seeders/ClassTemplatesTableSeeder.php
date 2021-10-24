<?php

namespace Database\Seeders;

use App\Models\ClassTemplate;
use Illuminate\Database\Seeder;

class ClassTemplatesTableSeeder extends Seeder
{
    public function run() {
        ClassTemplate::factory()->count(10)->create();
    }
}