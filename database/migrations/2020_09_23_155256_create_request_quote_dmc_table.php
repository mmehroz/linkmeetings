<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestQuoteDmcTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request_quote_dmc', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('request_quote_id')->nullable();
            $table->tinyInteger('dmc_service')->nullable()->default('0');
            $table->tinyInteger('transportation')->nullable()->default('0');
            $table->text('transportation_requirement')->nullable();
            $table->tinyInteger('tous_excursions')->nullable()->default('0');
            $table->text('tous_excursions_requirement')->nullable();
            $table->tinyInteger('team_building_csr')->nullable()->default('0');
            $table->text('team_building_requirement')->nullable();
            $table->tinyInteger('gifts')->nullable()->default('0');
            $table->text('gifts_requirement')->nullable();
            $table->tinyInteger('destination_experiences')->nullable()->default('0');
            $table->text('destination_experiences_requirement')->nullable();
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
        Schema::dropIfExists('request_quote_dmc');
    }
}
