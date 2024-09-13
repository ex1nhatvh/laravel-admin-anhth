<?php

namespace Tests\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Tests\Models\User;

class UserFactory extends Factory
{
    protected $model = User::class;

    /**
     * @return array
     */
    public function definition()
    {
        return [
            'username' => $this->faker->userName,
            'email'    => $this->faker->email,
            'mobile'   => $this->faker->phoneNumber,
            'avatar'   => $this->faker->imageUrl(),
            'password' => bcrypt('123456'),
        ];
    }
}
