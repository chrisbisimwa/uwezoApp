<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class BlogCommentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \App\Models\BlogComment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'blog_post_id' => \App\Models\BlogPost::factory(),
            'user_id' => \App\Models\User::factory(),
            'content' => $this->faker->text(),
            'status' => "approved",
        ];
    }
}