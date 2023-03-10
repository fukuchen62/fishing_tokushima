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
        Schema::create('shops', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 60)->nullable(false);
            $table->integer('city_id')->nullable(false)->default(0);
            $table->char('postal_code', 8);
            $table->string('address', 200)->nullable(false);
            $table->string('iframe', 500)->nullable();
            $table->string('longitude', 20)->nullable();
            $table->string('latitude', 20)->nullable();
            $table->string('tel', 20)->nullable(false);
            $table->string('fax', 20)->nullable();
            $table->string('email', 100)->nullable();
            $table->string('url', 200)->nullable();
            $table->string('service_day', 500)->nullable(false);
            $table->string('service', 500)->nullable(false);
            $table->string('pr', 500)->nullable();
            $table->boolean('is_show')->nullable(false)->default(true);
            $table->string('img', 200)->nullable();
            $table->string('memo', 200)->nullable();
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
        Schema::dropIfExists('shops');
    }
};
