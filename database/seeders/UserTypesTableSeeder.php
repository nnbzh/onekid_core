<?php

namespace Database\Seeders;

use App\Models\UserType;
use Illuminate\Database\Seeder;

class UserTypesTableSeeder extends Seeder
{
    public function run() {
        $items = [
            ["slug" => "parent", "name" => "Родитель"],
            ["slug" => "child", "name" => "Ребенок"]
        ];

        foreach ($items as $item) {
            UserType::query()->updateOrCreate(["slug" => $item['slug']], $item);
        }
    }
}