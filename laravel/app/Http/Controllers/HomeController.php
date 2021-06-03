<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Library;
use App\Book;
use App\Author;

class HomeController extends Controller
{
    public function index() {

        $libraries = Library::all();

        return view('pages.home', compact('libraries'));
    }

    public function show_books($id) {

        $library = Library::findOrFail($id);
        $books = $library -> books() -> get();

        return view('pages.library-books', compact('books'));
    }

    public function show_author($id) {

        $author = Author::findOrFail($id);

        return view('pages.author', compact('author'));
    }
}
