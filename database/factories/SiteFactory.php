<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Site>
 */
class SiteFactory extends Factory
{
     /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
     public function definition(): array
     {
          return [
               'nom' => fake()->city(),
               'adresse' => fake()->streetAddress(),
               'codepostal' =>fake()->randomNumber(5, true),
               'ville' => fake()->city(),
          ];
     }
}
