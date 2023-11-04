<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('services', function (Blueprint $table) {
            $table->ulid('id') -> primary();
            $table->string('name');
            $table->longText('description');
            $table->text('image') -> nullable();
            $table->string('author');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('author') -> references('email') -> on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
