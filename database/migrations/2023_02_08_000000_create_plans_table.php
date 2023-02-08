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
        // テーブル新規作成
        Schema::create('plans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 50)->nullable(false);
            $table->string('overview', 200)->nullable(false);
            $table->integer('level')->default(1);
            $table->integer('spot_id')->nullable(false);
            $table->integer('fish_id')->nullable(false);
            $table->text('flow')->nullable(false);
            $table->string('eye_catch', 200);
            $table->string('thumbnail', 200);
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
        Schema::dropIfExists('plans');
    }
};
