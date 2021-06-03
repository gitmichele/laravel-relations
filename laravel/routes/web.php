<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index')
    -> name('home');

Route::get('library/books/{id}', 'HomeController@show_books')
    -> name('show_books');