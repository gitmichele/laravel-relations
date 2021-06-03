<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table -> id();

            $table -> string('title');
            $table -> string('language', 16);
            $table -> year('edition_year');
            $table -> integer('pages');
            $table -> string('publisher', 128);
            $table -> integer('price');
            $table -> bigInteger('author_id') -> unsigned() -> index(); 

            $table -> timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
