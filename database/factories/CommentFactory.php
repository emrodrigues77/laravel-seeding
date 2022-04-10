<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory {
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition() {
        return [
            'comment' => $this->faker->paragraphs(rand(4, 15), true),
            'user_id' => DB::table('users')->select('id')->inRandomOrder()->first()->id,
            'post_id' => DB::table('posts')->select('id')->inRandomOrder()->first()->id,
        ];
    }
}