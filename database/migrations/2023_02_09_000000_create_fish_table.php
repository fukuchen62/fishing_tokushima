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
        Schema::create('fish', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 20)->nullable(false);
            $table->string('formal_name', 50)->nullable();
            $table->string('detail', 500)->nullable(false);
            $table->string('warning', 200)->nullable();
            $table->string('cooking1', 50)->nullable(false);
            $table->string('cooking2', 50)->nullable();
            $table->string('cooking3', 50)->nullable();
            $table->string('cooking_img1', 200)->nullable();
            $table->string('cooking_img2', 200)->nullable();
            $table->string('cooking_img3', 200)->nullable();
            $table->string('method', 100)->nullable(false);
            $table->string('month', 50)->nullable();
            $table->integer('level')->nullable(false)->default(1);
            $table->string('spot_id', 100)->nullable()->default(0);
            $table->string('fish_img1', 200)->nullable(false);
            $table->string('fish_img2', 200)->nullable();
            $table->string('fish_img3', 200)->nullable();
            $table->string('plan_id', 20)->nullable();
            $table->string('memo', 200)->nullable();
            $table->boolean('is_show')->nullable(false)->default(true);

            // $table->timestamps();
            $table->timestamp('created_at')->nullable(false);
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fish');
    }
};