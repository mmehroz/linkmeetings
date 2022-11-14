<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelGuestRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel_guest_rooms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('total_guest_rooms')->nullable();
            $table->string('doubles_guest_room')->nullable();
            $table->string('guest_room_suits')->nullable();
            $table->enum('tax',['Yes','No'])->nullable();
            $table->string('type_of_tax')->nullable();
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
        Schema::dropIfExists('hotel_guest_rooms');
    }
}
