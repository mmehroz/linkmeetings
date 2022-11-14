<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDmcFleetDescriptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dmc_fleet_description', function (Blueprint $table) {
            $table->id();
            $table->integer('dmc_fleet_id')->nullable();
            $table->integer('language_ide')->nullable();
            $table->string('name')->nullable();
            $table->string('capacity')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dmc_fleet_description');
    }
}
