<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->enum('type',['Hotel','DMC'])->nullable();
            $table->enum('status',['Active','Inactive'])->default('Active');
            $table->string('stripe_product_id')->nullable();
            $table->string('stripe_price_id')->nullable();
            $table->integer('week_deal_posting')->nullable();
            $table->integer('email_blast')->nullable();
            $table->integer('promo_article')->nullable();
            $table->integer('landing_page_posting')->nullable();
            $table->decimal('price',8,2)->nullable();
            $table->unsignedInteger('created_by');
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
        Schema::dropIfExists('packages');
    }
}
