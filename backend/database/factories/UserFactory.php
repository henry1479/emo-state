<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "lastname" => $this->faker->lastName(),
            'name' => $this->faker->firstName(),
            'surname' => $this->faker->lastName(),
            "age" => $this->faker->numberBetween(18, 90),
            'sex' => $this->faker->randomElement(["мужчина", "женщина"]),
            'city' => $this->faker->randomElement(["Москва", "Санкт-Петербург", "Владивосток", "Краснодар"]),
            "emotional_intellect" => $this->faker->numberBetween(70,120)
        ];
    }
    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
