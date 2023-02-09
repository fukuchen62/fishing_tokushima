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
            $table->integer('level')->nullable(false)->default(1);
            $table->integer('spot_id')->nullable(false)->default(0);
            $table->integer('fish_id')->nullable(false)->default(0);

            $table->text('flow')->nullable();
            $table->string('eye_catch', 200)->nullable();
            $table->string('thumbnail', 200)->nullable();

            $table->boolean('is_show')->nullable(false)->default(true);
            $table->timestamps();
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
        Schema::dropIfExists('plans');
    }
};
