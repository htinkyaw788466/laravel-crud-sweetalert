<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Person>
 */
class PersonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'firstName'=>$this->faker->firstName(),
            'lastName'=>$this->faker->lastName(),
            'email'=>$this->faker->email(),
            'city'=>$this->faker->city(),
            'website_url'=>$this->faker->url()
        ];
    }
}
