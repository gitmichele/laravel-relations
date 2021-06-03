<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookLibraryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_library', function (Blueprint $table) {
            $table -> id();

            $table -> bigInteger('book_id') -> unsigned() -> index(); 
            $table -> bigInteger('library_id') -> unsigned() -> index(); 
            
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
        Schema::dropIfExists('book_library');
    }
}
