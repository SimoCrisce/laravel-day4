<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 10; $i++) {
            DB::table('books')->insert([
                'title' => fake()->words(rand(3, 5), true),
                'author' => fake()->name(),
                'category' => fake()->words(1, true),
            ]);
    }
}
}
