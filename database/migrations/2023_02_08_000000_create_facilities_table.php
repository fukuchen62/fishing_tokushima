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
            $table->increment('id');
            $table->string('name', 50)->nullable(false);
            $table->integer('type', 20);
            $table->char('postal_code', 8);
            $table->string('address', 200)->nullable(false);
            $table->string('tel', 20);
            $table->string('longitude', 20);
            $table->string('latitude', 20);
            $table->string('memo', 200)->nullable(false);
            $table->boolean('is_show')->nullable(false)->default(true);
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