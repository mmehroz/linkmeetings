<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestQuoteDmcRfpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request_quote_dmc_rfp', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('request_quote_id')->nullable();
            $table->integer('dmc_id')->nullable();
            $table->longtext('note')->nullable();
            $table->string('transportation_image')->nullable();
            $table->longtext('transportation_description')->nullable();
            $table->decimal('transportation_price',8,2)->nullable();
            $table->string('tous_excursions_image')->nullable();
            $table->longtext('tous_excursions_description')->nullable();
            $table->decimal('tous_excursions_price',8,2)->nullable();
            $table->string('team_building_csr_image')->nullable();
            $table->longtext('team_building_csr_description')->nullable();
            $table->decimal('team_building_csr_price',8,2)->nullable();
            $table->string('gifts_image')->nullable();
            $table->longtext('gifts_description')->nullable();
            $table->string('gifts_price',8,2)->nullable();
            $table->string('destination_experiences_image')->nullable();
            $table->longtext('destination_experiences_description')->nullable();
            $table->decimal('destination_experiences_price',8,2)->nullable();
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
        Schema::dropIfExists('request_quote_dmc_rfp');
    }
}
