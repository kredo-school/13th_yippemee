<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJoinGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('join_groups', function (Blueprint $table) {
           
                $table->unsignedBigInteger('user_id');
                $table->unsignedBigInteger('plan_id');
                
                $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
                $table->foreign('plan_id')->references('id')->on('plans')->onDelete('cascade');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('join_groups');
    }
}
