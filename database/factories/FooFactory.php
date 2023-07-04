<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Foo>
 */
class FooFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'grade' => $this->faker->numberBetween(0, 100),
            'passed' => $this->faker->boolean,
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}
