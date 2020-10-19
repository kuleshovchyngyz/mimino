<?php

namespace Database\Factories;

use App\Models\Employee;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Employee::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'fullname' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'phone' => $this->faker->phoneNumber,
            'status_id' => User::all()->random()->id,
            'registered_by' => $this->faker->randomElement( [ 'Мимино', 'Организация' ] ),
            'patented_by' => $this->faker->randomElement( [ 'Мимино', 'Организация' ] ),
            'insured_by' => $this->faker->randomElement( [ 'Мимино', 'Организация' ] ),
            'registered_at' => $this->faker->dateTimeInInterval('-1 years', '+ 5 days'),
            'patented_at' => $this->faker->dateTimeInInterval('-1 years', '+ 5 days'),
            'insured_at' => $this->faker->dateTimeInInterval('-1 years', '+ 5 days'),
        ];
    }
}
