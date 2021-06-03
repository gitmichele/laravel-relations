<?php

use Illuminate\Database\Seeder;
use App\Library;
use App\Book;

class LibrarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Library::class, 5) -> create()
            -> each(function($library) {

            $books = Book::inRandomOrder() -> limit(rand(1, 50)) -> get();
            $library -> books() -> attach($books);

            $library -> save();
        });
    }
}
