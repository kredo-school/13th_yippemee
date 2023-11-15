<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupMyplanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('group_myplan', function (Blueprint $table) {
            $table->unsignedBigInteger('myplan_id');
            $table->unsignedBigInteger('group_id');
            $table->timestamps();

            $table->foreign('myplan_id')
                  ->references('id')
                  ->on('myplans')
                  ->onDelete('cascade');
            $table->foreign('group_id')
                  ->references('id')
                  ->on('groups')
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
        Schema::dropIfExists('group_myplan');
    }
}
