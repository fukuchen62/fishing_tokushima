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
        Schema::create('news', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 10)->nullable(false);
            $table->string('title', 50)->nullable(false);
            $table->string('overview', 150)->nullable(false);
            $table->text('content')->nullable(false);
            $table->string('eyecatch', 200)->nullable();
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
        Schema::dropIfExists('news');
    }
};
