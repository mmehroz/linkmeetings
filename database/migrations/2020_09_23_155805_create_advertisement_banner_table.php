<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdvertisementBannerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advertisement_banner', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('advertisement_id')->nullable();
            $table->integer('language_id')->nullable();
            $table->text('heading')->nullable();
            $table->longtext('description')->nullable();
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
        Schema::dropIfExists('advertisement_banner');
    }
}
