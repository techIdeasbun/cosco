<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Calificaraccidente;
use App\Models\Calificardisponibilidade;
use App\Models\Calificarentrega;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transporte>
 */
class TransporteFactory extends Factory
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
            'calificaraccidente_id' => Calificaraccidente::all()->random()->id,
            'calificardisponibilidade_id' => Calificardisponibilidade::all()->random()->id,
            'calificarentrega_id' => Calificarentrega::all()->random()->id,
        ];
    }
}
