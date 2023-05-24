<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SuperUser>
 */
class SuperUserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Name'=>$this->faker->userName(),
            'email'=>$this->faker->email(),
            'phone'=>$this->faker->e164PhoneNumber(),
            'age'=>$this->faker->numberBetween(10,30),
            'created_at'=>$this->faker->dateTime(),
            'updated_at'=>$this->faker->dateTime()
        ];
    }
}
