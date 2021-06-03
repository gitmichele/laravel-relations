<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Library;

class HomeController extends Controller
{
    public function index() {

        $libraries = Library::all();

        return view('pages.home', compact('libraries'));
    }
}
