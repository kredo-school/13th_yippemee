<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGenreSocialPostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('genre_social_post', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('social_post_id');
            $table->unsignedBigInteger('genre_id');
            $table->timestamps();

            $table->unique(['social_post_id', 'genre_id']);

            $table->foreign('social_post_id')->references('id')->on('social_posts')->onDelete('cascade');
            $table->foreign('genre_id')->references('id')->on('genres')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('genre_social_post');
    }
}
