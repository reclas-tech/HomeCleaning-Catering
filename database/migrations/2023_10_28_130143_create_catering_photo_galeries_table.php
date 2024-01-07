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
        Schema::create('catering_photo_galeries', function (Blueprint $table) {
            $table->ulid('id') -> primary();
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
        Schema::dropIfExists('catering_photo_galeries');
    }
};
