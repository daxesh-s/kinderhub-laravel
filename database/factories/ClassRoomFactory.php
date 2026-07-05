<?php

namespace Database\Factories;

use App\Models\ClassRoom;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<ClassRoom>
 */
class ClassRoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
             'name' => fake()->randomElement([
            'Nursery',
            'LKG',
            'UKG',
            'Grade 1',
            'Grade 2',
            'Grade 3',
            'Grade 4',
            'Grade 5',
        ]),

        'section' => fake()->randomElement(['A', 'B', 'C']),
        ];
    }
}
