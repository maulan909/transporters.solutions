<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(rand(3, 8)),
            'category_id' => rand(1, 2),
            'author_id' => 1,
            'slug' => $this->faker->unique()->slug(rand(3, 8)),
            'body' => '<implode>' . implode('</p><p>', $this->faker->paragraphs(rand(2, 4))) . '</implode>'
        ];
    }
}
