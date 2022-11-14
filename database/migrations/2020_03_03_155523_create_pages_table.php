<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('slug')->nullable();
            $table->integer('order')->default(0);
            $table->unsignedInteger('created_by');
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('pages_description', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('page_id');
            $table->integer('language_id');
            $table->string('template');
            $table->string('title');
            $table->string('short_title')->nullable();
            $table->text('content')->nullable();
            $table->text('short_content')->nullable();
            $table->string('meta_title')->nullable();
            $table->text('meta_keywords')->nullable();
            $table->text('meta_description')->nullable();
            $table->string('image')->nullable();
            $table->enum('status',['Active','Inactive'])->default('Active');
            $table->string('page_video',355)->nullable();
            $table->text('template_content')->nullable();
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
        Schema::dropIfExists('pages');
        Schema::dropIfExists('pages_description');
    }
}
