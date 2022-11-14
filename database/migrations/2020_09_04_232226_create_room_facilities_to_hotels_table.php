<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomFacilitiesToHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guest_room_facilities_to_hotels', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('room_facility_id')->nullable();
            $table->integer('hotel_id')->nullable();
            $table->integer('guest_room_id')->nullable();
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
        Schema::dropIfExists('guest_room_facilities_to_hotels');
    }
}
