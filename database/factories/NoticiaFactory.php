<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class NoticiaFactory extends Factory
{
    public function definition(): array
    {
        return [
            "titulo" => fake()->sentence,
            "cuerpo" => fake()->paragraphs(3, true),
            /* "imagen" => $faker->optional()->imageUrl(300, 300), */ // Imagen opcional: a veces si, a veces no
            "imagen" => fake()->imageUrl(300, 300),
            "autor" => '1',
        ];

    }

}
