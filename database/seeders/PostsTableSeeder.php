<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Insert 10 sample posts
        for ($i = 1; $i <= 10; $i++) {
            DB::table('posts')->insert([
                'title' => 'Sample Post Title ' . $i,
                'body' => 'This is the description for sample post ' . $i,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
