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
        Schema::create('evacuations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 50)->nullable(false);
            $table->integer('city_id')->nullable(false)->default(0);
            $table->string('address', 200)->nullable(false);
            $table->string('longitude', 20)->nullable();
            $table->string('latitude', 20)->nullable();
            $table->string('img1', 200)->nullable();
            $table->string('img2', 200)->nullable();
            $table->string('img3', 200)->nullable();
            $table->string('img4', 200)->nullable();
            $table->string('img5', 200)->nullable();
            $table->string('img6', 200)->nullable();
            $table->string('img7', 200)->nullable();
            $table->string('img8', 200)->nullable();
            $table->string('img9', 200)->nullable();
            $table->string('img10', 200)->nullable();
            $table->string('tel', 20)->nullable();
            $table->string('classification', 20)->nullable();
            $table->string('disaster', 200)->nullable();
            $table->string('memo', 200)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('evacuations');
    }
};