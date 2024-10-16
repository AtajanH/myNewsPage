<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('login')->unique(); // Уникальный логин
            $table->string('password'); // Хешированный пароль
            $table->timestamps(); // created_at и updated_at
            $table->string('role')->default('content_manager');
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}

