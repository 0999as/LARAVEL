<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->integer('age');
            $table->integer('salary');
            $table->datetime('created_at');
            $table->datetime('updated_at');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
