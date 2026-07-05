<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'school_id'=>4,
            'class_id'=>1,
            'admission_number' => fake()->unique()->bothify('ADM####'),

            'roll_number' => fake()->unique()->numberBetween(61, 5000),

            'first_name' => fake()->firstName(),

            'last_name' => fake()->lastName(),

            'gender' => fake()->randomElement(['MALE', 'FEMALE', 'OTHER']),

            'date_of_birth' => fake()->date(),

            'father_name' => fake()->name(),

            'mother_name' => fake()->name(),

            'email' => fake()->safeEmail(),

            'phone' => fake()->phoneNumber(),

            'address' => fake()->address(),

            'city' => fake()->city(),

            'state' => fake()->state(),

            'country' => fake()->country(),

            'postal_code' => fake()->postcode(),

            'blood_group' => fake()->randomElement([
                'A+',
                'A-',
                'B+',
                'B-',
                'AB+',
                'AB-',
                'O+',
                'O-',
            ]),

            'nationality' => fake()->country(),

            'religion' => fake()->randomElement([
                'Hindu',
                'Muslim',
                'Christian',
                'Sikh',
                'Jain',
            ]),

            'caste' => null,

            'medical_notes' => fake()->optional()->sentence(),

            'emergency_contact_name' => fake()->name(),

            'emergency_contact_phone' => fake()->phoneNumber(),

            'admission_date' => fake()->date(),

            'previous_school' => fake()->optional()->company() . ' School',

            'profile_picture' => null,

            'is_active' => fake()->boolean(95),
        ];
    }
}
