<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'              => 'admin',
            'email'             => 'admin@gmail.com',
            'password'          => '$2y$10$Wk9QU4apn/k9REP/gmzrVeSy8qBqEy9OLDWd.87hC3m4yEaO5msk.', // 12345678
            'role'              => 1,
        ];
    }
}
