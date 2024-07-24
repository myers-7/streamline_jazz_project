<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Patient;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Patient>
 */
class PatientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $genders = ['M', 'F'];
        $maritalStatuses = ['1', '2', '3', '4'];
        $relationships = ['1', '2', '3', '4', '5'];

        return [
        'first_name' => fake()->firstName(),
            'last_name' => fake()->lastName(),
            'gender' => fake()->randomElement($genders), // Enumeration for gender
            'nin' => fake()->text('14'), // National Identification Number
            'date_of_birth' => fake()->date(),
            'marital_status' => fake()->randomElement($maritalStatuses), // Enumeration for marital status
            'phone_number' => '0778678909',
            'next_of_kin' => fake()->name(),
            'kin_phone_number' => '0775676543',
            'relationship' => fake()->randomElement($relationships),
        ];
    }
}
