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
            $table->string('overview', 200)->nullable();
            $table->integer('city_id')->nullable(false)->default(0);
            $table->char('postal_code', 8)->nullable();
            $table->string('spot_address', 200)->nullable(false);
            $table->string('iframe_url', 200)->nullable();
            $table->string('spot_longitude', 20)->nullable();
            $table->string('spot_latitude', 20)->nullable();
            $table->string('toilet', 10)->nullable(false);
            $table->string('toilet_longitude', 20)->nullable();
            $table->string('toilet_latitude', 20)->nullable();
            $table->string('img1', 200)->nullable();
            $table->string('img2', 200)->nullable();
            $table->string('img3', 200)->nullable();
            $table->string('img4', 200)->nullable();
            $table->string('img5', 200)->nullable();
            $table->string('fish_id', 20)->nullable(false)->default(0);
            $table->string('mony', 20)->nullable();
            $table->string('bbq', 10)->nullable();
            $table->string('shop_id', 20)->nullable(false)->default(0);
            $table->string('plan_id', 20)->nullable(false)->default(0);
            $table->string('evacuation_id', 20)->nullable(false)->default(0);
            $table->integer('parking_id')->nullable(false)->default(0);
            $table->integer('hospital_id')->nullable(false)->default(0);
            $table->integer('supermarket_id')->nullable(false)->default(0);
            $table->integer('restaurant_id')->nullable(false)->default(0);
            $table->integer('other_id')->nullable(false)->default(0);
            $table->boolean('is_show')->nullable(false)->default(true);
            // $table->timestamps();
            $table->timestamp('created_at')->nullable(false);
            $table->timestamp('updated_at')->nullable();
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
