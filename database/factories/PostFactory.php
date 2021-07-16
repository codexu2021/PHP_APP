<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;


class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'created_at' => $faker->date('Y-m-d H:i:s', 'now'),
            'updated_at' => $faker->date('Y-m-d H:i:s', 'now'),
            'name' => $faker->name,
            'comment' => $faker->realText(200),
            //
        ];
    }
}
