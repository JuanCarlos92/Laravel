<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Libro>
 */
class LibroFactory extends Factory
{

    public function definition(): array
    {
        return [
            'título' => $this->faker->sentence,
            'isbn'=> $this->faker->numberBetween(0,999999999),
            'categoría' => $this->faker->randomElement(['Ciencia Ficción','Novela','Biografia','Desarollo Personal']),
            'autor' => $this->faker->name,
            'editorial' => $this->faker->name,
            'num_páginas' => $this->faker->numberBetween(0,999),
            'pvp' => $this->faker->randomFloat(2,9.9,99)
        ];
    }
}
