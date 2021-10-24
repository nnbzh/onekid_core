<?php

namespace Database\Seeders;

use App\Models\ClassCategory;
use Illuminate\Database\Seeder;

class ClassCategoriesTableSeeder extends Seeder
{
    public function run() {
        $items = [
            [
                'slug' => 'fights',
                'name' => 'Боевые исскуства'
            ],
            [
                'slug' => 'languages',
                'name' => 'Языки'
            ],
            [
                'slug' => 'table_games',
                'name' => 'Настольные игры'
            ],
            [
                'slug' => 'group_plays',
                'name' => 'Групповые занятия'
            ],
        ];

        foreach ($items as $item) {
            ClassCategory::query()->updateOrCreate(['slug' => $item['slug']], $item);
        }
    }
}