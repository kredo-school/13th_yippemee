<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublicCalendarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('public_calendars', function (Blueprint $table) {
            $table->id();
            $table->string('member_id');
            $table->string('restaurant_id');
            $table->vachar('title');
            $table->varchar('description');
            $table->dateTime('date')->nullable();
            $table->dateTime('time')->nullable();
            $table->varchar('available_member')->nullable();

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
        Schema::dropIfExists('public_calendars');
    }
}
