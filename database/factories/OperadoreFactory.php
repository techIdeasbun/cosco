<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Operadore>
 */
class OperadoreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->company(),
            'direccion' => $this->faker->streetAddress(true),
            'telefono' => $this->faker->phoneNumber(),
            'nit' => $this->faker->unique()->numberBetween(6000000, 2000000000),
        ];
    }
}
