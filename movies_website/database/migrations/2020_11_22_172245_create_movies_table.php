<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description');
            $table->date('release_date');
            $table->string('runtime');
            $table->float('rating');
            $table->string('poster')->nullable();
            $table->string('video')->nullable();
            $table->timestamps();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('tag_id')->constrained();
            $table->foreignId('producer_id')->constrained();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movies');
    }
}
