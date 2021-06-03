<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Library;
use App\Book;

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
}
