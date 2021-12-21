<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TeamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'position' => $this->faker->jobTitle(),
            'linkedin' => 'http://linkedin.com/',
            'whatsapp' => '898788987',
            'instagram' => ''
        ];
    }
}
