<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $thumb = $this->faker->image('public/images/posts');
        $title = $this->faker->sentence(3);

        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'user_id' => User::pluck('id')->random(),
            'content' => $this->faker->paragraph(),
            'thumb' => str_replace('public', '', $thumb)
        ];
    }
}
