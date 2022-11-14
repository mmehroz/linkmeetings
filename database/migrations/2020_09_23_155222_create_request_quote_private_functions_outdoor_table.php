<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestQuotePrivateFunctionsOutdoorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request_quote_private_functions_outdoor', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('request_quote_id')->nullable();
            $table->enum('type', ['beach', 'terrace', 'garden', 'other'])->nullable();
            $table->tinyInteger('set_up')->nullable()->default('0');
            $table->tinyInteger('cocktail')->nullable()->default('0');
            $table->tinyInteger('banquet')->nullable()->default('0');
            $table->tinyInteger('set_up_other')->nullable()->default('0');
            $table->longtext('set_up_other_description')->nullable();
            $table->tinyInteger('av')->nullable()->default('0');
            $table->tinyInteger('screen')->nullable()->default('0');
            $table->tinyInteger('sound_system')->nullable()->default('0');
            $table->tinyInteger('projection')->nullable()->default('0');
            $table->tinyInteger('translation_system')->nullable()->default('0');
            $table->tinyInteger('lights')->nullable()->default('0');
            $table->tinyInteger('av_other')->nullable()->default('0');
            $table->longtext('av_other_description')->nullable();
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
        Schema::dropIfExists('request_quote_private_functions_outdoor');
    }
}
