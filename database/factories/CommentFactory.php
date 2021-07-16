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
            'created_at' => $faker->date('Y-m-d H:i:s', 'now'),
            'updated_at' => $faker->date('Y-m-d H:i:s', 'now'),
            'subject' => $faker->realText(16),    // 16文字のテキスト
            'message' => $faker->realText(200),    // 200文字のテキスト
            'name' => $faker->name,    // 氏名
            'category_id' => $faker->numberBetween(1,5),    // 1〜5のランダムな整数
        ];
    }
}
