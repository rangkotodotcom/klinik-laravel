<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'      => 'Klinik Gigi Aja',
            'address'   => 'Jl. Suka Hati',
            'phone'     => '08080808080'
        ];
    }
}
