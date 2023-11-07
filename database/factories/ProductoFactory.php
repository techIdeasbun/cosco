<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producto>
 */
class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->unique()->randomElement(['Trigo', 'Maiz', 'Arroz', 'Frijo', 'Torta']),
            'calidad' => $this->faker->randomElement(['Argentino', 'Frances', 'Canadience', 'Americano', 'Boliviano']),
        ];
    }
}
