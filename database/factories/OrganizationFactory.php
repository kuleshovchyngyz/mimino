<?php

namespace Database\Factories;

use App\Models\Organization;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrganizationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Organization::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'organization_type' => $this->faker->randomElement(['ООО', 'ОсОО', 'ИП', 'ЧП']),
            'name' => $this->faker->company,
            'contract_number' => $this->faker->randomNumber,
            'contract_form' =>  $this->faker->randomElement(['Письменный', 'Электронный']), // password
            'contract_date' => $this->faker->dateTime($max = 'now'),
            'manager_id' => User::all()->random()->id,
        ];
    }
}
