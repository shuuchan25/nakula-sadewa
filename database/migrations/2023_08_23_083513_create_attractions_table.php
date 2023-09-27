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
        Schema::create('attractions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id');
            $table->foreignId('sub_category_id');
            $table->string('name');
            $table->string('slug')->unique();
            $table->text('image');
            $table->text('address');
            $table->text('description');
            $table->string('operational_hour');
            $table->string('contact');
            $table->integer('price');
            $table->string('map');
            $table->string('video')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attractions');
    }
};