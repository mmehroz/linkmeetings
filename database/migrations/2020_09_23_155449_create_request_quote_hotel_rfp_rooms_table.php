<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestQuoteHotelRfpRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request_quote_hotel_rfp_rooms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('request_quote_hotel_rfp_id')->nullable();
            $table->integer('request_quote_id')->nullable();
            $table->integer('request_quote_room_id')->nullable();
            $table->decimal('price',8,2)->nullable();
            $table->tinyInteger('tax')->nullable()->default('0');
            $table->text('type_of_tax')->nullable();
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
        Schema::dropIfExists('request_quote_hotel_rfp_rooms');
    }
}
