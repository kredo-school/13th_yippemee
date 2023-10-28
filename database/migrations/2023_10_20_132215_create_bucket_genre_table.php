<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBucketGenreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bucket_genre', function (Blueprint $table) {
            $table->unsignedBigInteger('bucket_id');
            $table->unsignedBigInteger('genre_id');
            $table->timestamps();

            $table->foreign('bucket_id')
                  ->references('id')
                  ->on('buckets')
                  ->onDelete('cascade');
            $table->foreign('genre_id')
                  ->references('id')
                  ->on('genres')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bucket_genre');
    }
}
