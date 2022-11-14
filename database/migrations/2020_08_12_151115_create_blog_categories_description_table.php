<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogCategoriesDescriptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_categories_description', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('blog_category_id')->nullable();
            $table->integer('language_id')->nullable();
            $table->string('title')->nullable();
            $table->string('description')->nullable();
            $table->tinyInteger('parent_id')->nullable()->default(0)->nullable();
            $table->enum('status',['Active','Inactive'])->default('Active')->nullable();
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
        Schema::dropIfExists('blog_categories_description');
    }
}
