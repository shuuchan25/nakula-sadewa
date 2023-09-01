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
        Schema::create('desawisata_images', function (Blueprint $table) {
            $table->id();
            $table->foreignId('desawisata_id');
            $table->foreign('desawisata_id')->references('id')->on('desawisata_datas');
            $table->text('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('desawisata_images');
    }
};