<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestQuoteHotelRfpAdditionalDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request_quote_hotel_rfp_additional_documents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('request_quote_id')->nullable();
            $table->integer('request_quote_hotel_rfp_id')->nullable();
            $table->string('file')->nullable();
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
        Schema::dropIfExists('request_quote_hotel_rfp_additional_documents');
    }
}
