<?php

use Illuminate\Database\Seeder;
use App\Book;
use App\Author;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Book::class, 100) -> make()
            -> each(function($book) {

            $author = Author::inRandomOrder() -> first();
            $book -> author() -> associate($author);

            $book -> save();
        });
    }
}
