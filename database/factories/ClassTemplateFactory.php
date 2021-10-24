<?php

namespace Database\Factories;

use App\Models\Centre;
use App\Models\ClassCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClassTemplateFactory extends Factory
{

    public function definition()
    {
        return [
            'name' => $this->faker->languageCode,
            'description' => $this->faker->languageCode,
            'center_id'   => Centre::query()->inRandomOrder()->first()->id,
            'category_id' => ClassCategory::query()->inRandomOrder()->first()->id,
        ];
    }
}