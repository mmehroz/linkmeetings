<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResturantBarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resturant_bar', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->string('cuisine')->nullable();
            $table->string('opening_time')->nullable();
            $table->string('dress_code')->nullable();
            $table->string('access')->nullable();
            $table->string('image')->nullable();
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
        Schema::dropIfExists('resturant_bar');
    }
}
