<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contact>
 */
class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'description_uz' => Str::random(20),
            'description_ru' => Str::random(20),
            'description_en' => Str::random(20),
            'location_uz' => Str::random(20),
            'location_ru' => Str::random(20),
            'location_en' => Str::random(20),
            'email' => Str::random(20),
            'call' => Str::random(10),
            'location_url' => Str::random(30),
        ];
    }
}
