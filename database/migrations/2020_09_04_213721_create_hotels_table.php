<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotels', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('slug')->nullable();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('zip')->nullable();
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->string('space_meeting_room')->nullable();
            $table->string('space_meeting_space')->nullable();
            $table->string('space_guest_rooms')->nullable();
            $table->string('space_restuatrant_bars')->nullable();
            $table->string('space_chain_name')->nullable();
            $table->string('space_built_year')->nullable();
            $table->string('space_total_meeting_space_area')->nullable();
            $table->string('space_brand_name')->nullable();
            $table->string('space_dmc')->nullable();
            $table->string('space_renovation_year')->nullable();
            $table->string('space_all_inclusive_hotel')->nullable();
            $table->integer('space_aaa_rating')->nullable();
            $table->integer('space_trip_advisor_rating')->nullable();
            $table->string('total_meeting_space')->nullable();
            $table->string('largest_room')->nullable();
            $table->string('second_largest_room')->nullable();
            $table->string('exhibit_space')->nullable();
            $table->string('catering_service_image')->nullable();
            $table->string('terms_conditions')->nullable();
            $table->tinyInteger('is_featured')->nullable();
            $table->unsignedInteger('created_by')->nullable();
            $table->unsignedInteger('manage_by')->nullable();
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
        Schema::dropIfExists('hotels');
    }
}
