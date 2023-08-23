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
        Schema::create('hotel_room', function (Blueprint $table) {
            $table->id();
            $table->foreignId('hotel_id');
            $table->foreign('hotel_id')->references('id')->on('hotel');
            $table->string('name');
            $table->string('capacity');
            $table->text('description');
            $table->integer('price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hotel_room');
    }
};