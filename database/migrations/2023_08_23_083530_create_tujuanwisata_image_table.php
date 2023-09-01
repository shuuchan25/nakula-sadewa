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
        Schema::create('tujuanwisata_images', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tujuanwisata_id');
            $table->foreign('tujuanwisata_id')->references('id')->on('tujuanwisatas');
            $table->text('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tujuanwisata_images');
    }
};