<?php

namespace App\Models;

class Genre
{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'name' => 'Fantasy',
                'description' => 'Genre dengan unsur sihir dan dunia fantasi.'
            ],
            [
                'id' => 2,
                'name' => 'Romance',
                'description' => 'Genre yang berfokus pada kisah percintaan.'
            ],
            [
                'id' => 3,
                'name' => 'Mystery',
                'description' => 'Genre yang berisi teka-teki dan misteri.'
            ],
            [
                'id' => 4,
                'name' => 'Horror',
                'description' => 'Genre yang menghadirkan suasana menegangkan.'
            ],
            [
                'id' => 5,
                'name' => 'Science Fiction',
                'description' => 'Genre dengan unsur sains dan teknologi.'
            ],
        ];
    }
}
