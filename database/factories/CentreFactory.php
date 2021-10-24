<?php

namespace Database\Factories;

use App\Models\Business;
use App\Models\Centre;
use Illuminate\Database\Eloquent\Factories\Factory;

class CentreFactory extends Factory
{
    protected $model = Centre::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'business_id' => Business::query()->inRandomOrder()->first()->id
        ];
    }
}