<?php
namespace App\Models;

class Author
{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'name' => 'Tere Liye',
                'country' => 'Indonesia'
            ],
            [
                'id' => 2,
                'name' => 'Andrea Hirata',
                'country' => 'Indonesia'
            ],
            [
                'id' => 3,
                'name' => 'J.K. Rowling',
                'country' => 'United Kingdom'
            ],
            [
                'id' => 4,
                'name' => 'George R.R. Martin',
                'country' => 'United States'
            ],
            [
                'id' => 5,
                'name' => 'Agatha Christie',
                'country' => 'United Kingdom'
            ],
        ];
    }
}
