<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('books')->insert([
            [
                'title' => 'Bumi',
                'description' => 'Novel fantasi tentang petualangan di dunia paralel.',
                'price' => 85000,
                'stock' => 20,
                'cover_photo' => 'bumi.jpg',
                'genre_id' => 1,
                'author_id' => 1,
            ],
            [
                'title' => 'Laskar Pelangi',
                'description' => 'Kisah perjuangan anak-anak Belitung dalam meraih pendidikan.',
                'price' => 90000,
                'stock' => 15,
                'cover_photo' => 'laskar-pelangi.jpg',
                'genre_id' => 2,
                'author_id' => 2,
            ],
            [
                'title' => 'Harry Potter and the Philosopher’s Stone',
                'description' => 'Petualangan seorang penyihir muda di Hogwarts.',
                'price' => 120000,
                'stock' => 10,
                'cover_photo' => 'harry-potter.jpg',
                'genre_id' => 1,
                'author_id' => 3,
            ],
            [
                'title' => 'A Game of Thrones',
                'description' => 'Kisah perebutan kekuasaan di dunia fantasi Westeros.',
                'price' => 150000,
                'stock' => 8,
                'cover_photo' => 'game-of-thrones.jpg',
                'genre_id' => 1,
                'author_id' => 4,
            ],
            [
                'title' => 'Murder on the Orient Express',
                'description' => 'Novel misteri tentang penyelidikan pembunuhan di kereta.',
                'price' => 95000,
                'stock' => 12,
                'cover_photo' => 'orient-express.jpg',
                'genre_id' => 3,
                'author_id' => 5,
            ],
        ]);
    }
}
