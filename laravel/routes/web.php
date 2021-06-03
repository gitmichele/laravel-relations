<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index')
    -> name('home');

Route::get('library/books/{id}', 'HomeController@show_books')
    -> name('show_books');

    Route::get('book/author/{id}', 'HomeController@show_author')
        -> name('show_author');