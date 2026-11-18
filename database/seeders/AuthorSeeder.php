<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('authors')->insert([
            [
                'name' => 'Tere Liye',
                'photo' => 'tere-liye.jpg',
                'bio' => 'Penulis Indonesia yang dikenal melalui novel-novel populer.'
            ],
            [
                'name' => 'Andrea Hirata',
                'photo' => 'andrea-hirata.jpg',
                'bio' => 'Penulis Indonesia yang terkenal melalui novel Laskar Pelangi.'
            ],
            [
                'name' => 'J.K. Rowling',
                'photo' => 'jk-rowling.jpg',
                'bio' => 'Penulis asal Inggris yang dikenal sebagai pencipta Harry Potter.'
            ],
            [
                'name' => 'George R.R. Martin',
                'photo' => 'george-martin.jpg',
                'bio' => 'Penulis asal Amerika yang dikenal melalui A Song of Ice and Fire.'
            ],
            [
                'name' => 'Agatha Christie',
                'photo' => 'agatha-christie.jpg',
                'bio' => 'Penulis Inggris yang terkenal dengan novel misteri dan detektif.'
            ],
        ]);
    }
}
