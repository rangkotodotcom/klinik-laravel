<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PatientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $add = random_int(1, 100000);

        $key = random_int(0, 1);

        $gender = ['l', 'p'];

        return [
            'rm_number'     => time() + $add,
            'name'          => $this->faker->name,
            'age'           => random_int(15, 50),
            'gender'        => $gender[$key],
            'address'       => $this->faker->address,
            'phone'         => $this->faker->phoneNumber
        ];
    }
}
