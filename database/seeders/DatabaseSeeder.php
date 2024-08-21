<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Author;
use App\Models\Book;
use App\Models\Country;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Country::factory(50)->create();
        Author::factory(25)->create();
        Book::factory(15)->create();

        // Table author_book
        for ($i = 1; $i <= 15; $i++) {
            $book = Book::find($i);
            $book->authors()->attach(random_int(1, 25));
        }
    }
}
