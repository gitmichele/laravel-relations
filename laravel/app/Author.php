<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Book;

class Author extends Model
{
    protected $fillable = [
        'firstname',
        'lastname',
        'nationality',
        'age',
        'email',
    ];

    public function books() {

        return $this -> hasMany(Book::class);
    }
}
