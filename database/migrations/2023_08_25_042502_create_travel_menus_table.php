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
        Schema::create('travel_menus', function (Blueprint $table) {
            $table->id();
            $table->foreignId('travel_id');
            $table->string('name');
            $table->string('slug')->unique();
            $table->text('description');
            $table->text('image');
            $table->integer('price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('travel_menus');
    }
};
