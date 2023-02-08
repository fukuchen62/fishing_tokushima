<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spots', function (Blueprint $table) {
            $table->increment('id');
            $table->string('name', 60)->nullable(false);
            $table->string('overview', 200);
            $table->string('city_id', 20)->nullable(false);
            $table->char('postal_code', 8);
            $table->string('spot_address', 200)->nullable(false);
            $table->string('iframe_url', 200);
            $table->string('spot_longitude', 20);
            $table->string('spot_latitude', 20);
            $table->string('toilet', 10)->nullable(false);
            $table->string('toilet_longitude', 20);
            $table->string('toilet_latitude', 20);
            $table->string('img1', 200)->nullable(false);
            $table->string('img2', 200);
            $table->string('img3', 200);
            $table->string('img4', 200);
            $table->string('img5', 200);
            $table->string('fish_id', 20);
            $table->string('mony', 20);
            $table->string('bbq', 10);
            $table->string('shop_id', 20);
            $table->string('plan_id', 10);
            $table->string('evacuation_id', 10);
            $table->integer('parking_id')->default(0);
            $table->integer('hospital_id')->default(0);
            $table->integer('supermarket_id')->default(0);
            $table->integer('restaurant_id')->default(0);
            $table->integer('other_id')->default(0);
            $table->string('connection1', 200);
            $table->string('connection2', 200);
            $table->string('connection3', 200);
            $table->boolean('is_show')->default(true);
            $table->timestamps();
            $table->timestamp('deleted_at')->default(null);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('spots');
    }
};