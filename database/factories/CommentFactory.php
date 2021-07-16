<?php

namespace Database\Factories;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Factories\Factory;

use Faker\Generator as Faker;


class CommentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Comment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'created_at' => $this->faker->date('Y-m-d H:i:s', 'now'),
            'updated_at' => $this->faker->date('Y-m-d H:i:s', 'now'),
            'subject' => $this->faker->realText(16),    // 16文字のテキスト
            'message' => $this->faker->realText(200),    // 200文字のテキスト
            'name' => $this->faker->name,    // 氏名
        ];
    }
}
