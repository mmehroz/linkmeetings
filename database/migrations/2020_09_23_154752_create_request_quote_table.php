<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestQuoteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request_quote', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->bigInteger('phone')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->string('rooms')->nullable();
            $table->string('guests')->nullable();
            $table->longtext('description')->nullable();
            $table->integer('hotel_id')->nullable();
            $table->integer('dmc_id')->nullable();
            $table->enum('quote_hotel_status', ['inquiry', 'sent', 'pending', 'confirmed', 'canceled'])->nullable();
            $table->enum('quote_dmc_status', ['inquiry', 'sent', 'pending', 'confirmed', 'canceled'])->nullable();
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
        Schema::dropIfExists('request_quote');
    }
}
