<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiteSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('site_settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('site_title');
            $table->string('site_email');
            $table->string('site_phone')->nullable();
            $table->string('logo_image')->nullable();
            $table->string('logo_image_inner_pages')->nullable();
            $table->enum('socialmedia_status', ['Active', 'Inactive'])->nullable()->default('Active');
            $table->string('facebook', 255)->nullable();
            $table->string('twitter', 255)->nullable();
            $table->string('linkedin', 255)->nullable();
            $table->string('youtube', 255)->nullable();
            $table->string('instagram', 255)->nullable();
            $table->string('googleplus', 255)->nullable();
            $table->string('pinterest', 255)->nullable();
            $table->string('contact_from_email', 255)->nullable();
            $table->string('contact_to_email', 255)->nullable();
            $table->text('company_address')->nullable();
            $table->text('google_analytics')->nullable();
            $table->text('designed_by')->nullable();
            $table->text('copyright')->nullable();
            $table->decimal('hot_deal_price',8,2)->nullable();
            $table->decimal('home_slider_ad_price',8,2)->nullable();
            $table->decimal('home_banner_ad_price',8,2)->nullable();
            $table->decimal('search_page_ad_price',8,2)->nullable();
            $table->text('quick_link')->nullable();
            $table->text('help')->nullable();
            $table->text('partner')->nullable();
            $table->text('subcribe_text')->nullable();

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
        Schema::dropIfExists('site_settings');
    }
}
