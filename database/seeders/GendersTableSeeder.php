<?php

namespace Database\Seeders;

use App\Models\Gender;
use Illuminate\Database\Seeder;

class GendersTableSeeder extends Seeder
{
    public function run() {
        $items = [
            ["slug" => "men", "name" => "Мужской"],
            ["slug" => "women", "name" => "Женский"]
        ];

        foreach ($items as $item) {
            Gender::query()->updateOrCreate(["slug" => $item['slug']], $item);
        }
    }
}