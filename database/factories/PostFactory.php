<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory {
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition() {
        return [
            'title' => $this->faker->sentence(3, 6),
            'content' => $this->faker->paragraphs(rand(4, 15), true),
            'postedAt' => $this->faker->date('Y-m-d'),
            'user_id' => DB::table('users')->select('id')->inRandomOrder()->first()->id,
        ];
    }
}