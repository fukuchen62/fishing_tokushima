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
        Schema::create('knowledges', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id')->nullable(false)->default(0);
            $table->string('title', 50)->nullable(false);
            $table->string('overview', 200)->nullable();
            $table->text('content')->nullable();
            $table->string('thumbnail', 200)->nullable(false);
            $table->boolean('is_show')->default(true)->nullable(false);
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
        Schema::dropIfExists('knowledges');
    }
};