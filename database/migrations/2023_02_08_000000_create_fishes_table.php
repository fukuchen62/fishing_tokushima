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
        Schema::create('fishes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 20)->nullable(false);
            $table->string('formal_name', 50);
            $table->string('detail', 500)->nullable(false);
            $table->string('warning', 200);
            $table->string('cooking1', 50)->nullable(false);
            $table->string('cooking2', 50);
            $table->string('cooking3', 50);
            $table->string('cooking_img1', 200);
            $table->string('cooking_img2', 200);
            $table->string('cooking_img3', 200);
            $table->string('method', 100)->nullable(false);
            $table->string('month', 50);
            $table->integer('level')->default(1);
            $table->string('spot_id', 100);
            $table->string('fish_img1', 200)->nullable(false);
            $table->string('fish_img2', 200);
            $table->string('fish_img3', 200);
            $table->string('plan_id', 20);
            $table->string('memo', 200);
            $table->boolean('is_show')->default(true)->nullable(false);
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
        Schema::dropIfExists('fishes');
    }
};