<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRfpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rfp', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable(); 
            $table->string('rfp_name')->nullable();
            $table->string('rfp_position')->nullable();
            $table->string('rfp_email')->nullable();
            $table->string('rfp_phone')->nullable();
            $table->string('type')->nullable();
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
        Schema::dropIfExists('rfp');
    }
}
