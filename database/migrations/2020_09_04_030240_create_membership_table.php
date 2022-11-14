<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembershipTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('membership', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->integer('package_id')->nullable();
            $table->string('stripe_subscription_id')->nullable();
            $table->integer('quantity')->nullable();
            $table->integer('paid')->nullable();
            $table->timestamp('start')->nullable();
            $table->timestamp('expiry')->nullable();
            $table->string('type')->nullable();
            $table->integer('invoice')->nullable();
            $table->string('payment_id')->nullable();
            $table->string('payment_type')->nullable();
            $table->text('bank_draft_description')->nullable();
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
        Schema::dropIfExists('membership');
    }
}
