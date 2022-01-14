<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComicBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comicBooks', function (Blueprint $table) {
            $table->text('title');
            $table->integer('volume')->unsigned();
            $table->integer('issue_number')->unsigned();
            $table->integer('publication_month');
            $table->integer('publication_year');
            $table->text('condition');
            $table->text('last_name_writer');
            $table->text('first_name_writer');
            $table->text('last_name_artist');
            $table->text('first_name_artist');
            $table->id();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comicBooks');
    }
}
