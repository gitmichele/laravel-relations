<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Author;
use App\Library;

class Book extends Model
{
    protected $fillable = [
        'title',
        'language',
        'edition_year',
        'pages',
        'publisher',
        'price',
        'author_id',
    ];

    public function author() {

        return $this -> belongsTo(Author::class);
    }

    public function libraries() {

        return $this -> belongsToMany(Library::class);
    }
}
