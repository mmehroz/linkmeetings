<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel_rooms', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->string('area')->nullable();
            $table->string('height')->nullable();
            $table->string('size')->nullable();
            $table->string('cocktail')->nullable();
            $table->string('theatre')->nullable();
            $table->string('school')->nullable();
            $table->string('banquet')->nullable();
            $table->string('imperial')->nullable();
            $table->string('ushape')->nullable();
            $table->integer('hotel_id')->nullable();
            $table->unsignedInteger('created_by')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('hotel_rooms');
    }
}
