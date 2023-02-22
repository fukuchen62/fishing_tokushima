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
        Schema::create('facilities', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 50)->nullable(false);
            $table->integer('type')->nullable();
            $table->char('postal_code', 8)->nullable();
            $table->string('address', 200)->nullable(false);
            $table->string('tel', 20)->nullable();
            $table->string('longitude', 20)->nullable();
            $table->string('latitude', 20)->nullable();
            $table->string('memo', 200)->nullable();
            $table->boolean('is_show')->default(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('facilities');
    }
};
