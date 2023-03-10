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

        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name', 40)->nullable(false);
            $table->string('nickname', 40)->nullable();
            $table->string('email', 100)->nullable(false)->unique();
            $table->timestamp('email_verified_at');
            $table->string('password', 100)->nullable(false);
            $table->integer('authority')->nullable(false)->default(1);
            $table->rememberToken();
            $table->boolean('is_show')->default(1);
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
        Schema::dropIfExists('users');
    }
};