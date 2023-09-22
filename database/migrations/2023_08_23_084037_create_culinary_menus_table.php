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
        Schema::create('culinary_menus', function (Blueprint $table) {
            $table->id();
            $table->foreignId('culinary_id');
            $table->foreignId('menu_category_id');
            $table->string('name');
            $table->string('slug')->unique();
            $table->text('image');
            $table->integer('price');
            $table->text('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('culinary_menus');
    }
};