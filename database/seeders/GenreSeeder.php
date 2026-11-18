<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenreSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('genres')->insert([
            [
                'name' => 'Fantasy',
                'description' => 'Genre dengan unsur sihir dan dunia fantasi.'
            ],
            [
                'name' => 'Romance',
                'description' => 'Genre yang berfokus pada kisah percintaan.'
            ],
            [
                'name' => 'Mystery',
                'description' => 'Genre yang berisi teka-teki dan misteri.'
            ],
            [
                'name' => 'Horror',
                'description' => 'Genre yang menghadirkan suasana menegangkan.'
            ],
            [
                'name' => 'Science Fiction',
                'description' => 'Genre dengan unsur sains dan teknologi.'
            ],
        ]);
    }
}
