<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenuDescriptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_description', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->enum('type',['Custom','Page'])->nullable();
            $table->integer('menu_id')->nullable();
            $table->integer('language_id')->nullable();
            $table->integer('page_id')->nullable();
            $table->string('title')->nullable();
            $table->string('url')->nullable();
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
        Schema::dropIfExists('menu_description');
    }
}
