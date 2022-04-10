<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder {
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('users')->truncate();
        DB::table('posts')->truncate();
        DB::table('comments')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
        \App\Models\User::factory(10)->create();
        \App\Models\Post::factory(30)->create();
        \App\Models\Comment::factory(90)->create();
    }
}