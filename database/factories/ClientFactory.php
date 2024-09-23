<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
     /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
     public function definition(): array
     {
          return [
               'raisonsociale' => fake()->company(),
               'siret' => fake()->siret(),
               'adresse' => fake()->streetAddress(),
               'codepostal' =>fake()->randomNumber(5, true),
               'ville' => fake()->city(),
               'web' => fake()->url(),
          ];
     }
}
