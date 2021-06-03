<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('books', function (Blueprint $table) {

            $table  -> foreign('author_id', 'bookauthor')
                    -> references('id')
                    -> on('authors');
        });

        Schema::table('book_library', function (Blueprint $table) {

            $table  -> foreign('book_id', 'booklibrary')
                    -> references('id')
                    -> on('books');

            $table  -> foreign('library_id', 'librarybook')
                    -> references('id')
                    -> on('libraries');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('books', function (Blueprint $table) {
            $table  -> dropForeign('bookauthor');
        });

        Schema::table('book_library', function (Blueprint $table) {
            $table  -> dropForeign('booklibrary');
            $table  -> dropForeign('librarybook');
        });
    }
}
