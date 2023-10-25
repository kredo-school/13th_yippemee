<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestaurantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurants', function (Blueprint $table) {
            $table->id();
            $table->string('name',50);
            $table->string('location',50);
            $table->string('addresss')->nullable( );
            $table->string('tel',50)->nullable( );
            $table->text('description')->nullable( );
            $table->string('monday')->nullable( );
            $table->string('tuesday')->nullable( );
            $table->string('wednesday')->nullable( );
            $table->string('thursday')->nullable( );
            $table->string('friday')->nullable( );
            $table->string('satruday')->nullable( );
            $table->string('sunday')->nullable( );
            $table->longtext('image')->nullable();
            $table->string('url');
            $table->string('googlemap');
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
        Schema::dropIfExists('restaurants');
    }
}