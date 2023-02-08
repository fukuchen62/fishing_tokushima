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
            $table->increments('id');
            $table->string('name', 60)->nullable(false);
            $table->string('overview', 200);
            $table->integer('city_id')->nullable(false)->default(0);
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
            $table->integer('fish_id')->nullable(false)->default(0);
            $table->string('mony', 20);
            $table->string('bbq', 10);
            $table->integer('shop_id')->nullable(false)->default(0);
            $table->integer('plan_id')->nullable(false)->default(0);
            $table->integer('evacuation_id')->nullable(false)->default(0);
            $table->integer('parking_id')->nullable(false)->default(0);
            $table->integer('hospital_id')->nullable(false)->default(0);
            $table->integer('supermarket_id')->nullable(false)->default(0);
            $table->integer('restaurant_id')->nullable(false)->default(0);
            $table->integer('other_id')->nullable(false)->default(0);
            $table->boolean('is_show')->nullable(false)->default(true);
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable()->default(null);
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