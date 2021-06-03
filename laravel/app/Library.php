<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Book;

class Library extends Model
{
    protected $fillable = [
        'name',
        'address',
        'city',
        'state',
        'seats',
        'phone_number',
    ];

    public function books() {

        return $this -> belongsToMany(Book::class);
    }
}
