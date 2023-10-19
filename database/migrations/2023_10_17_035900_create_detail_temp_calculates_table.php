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
        Schema::create('detail_temp_calculates', function (Blueprint $table) {
            $table->id();
            $table->string('session_id');
            $table->foreignId('temp_id');
            $table->integer('item_id');
            $table->string('category');
            $table->string('slug');
            $table->integer('quantity')->default(1);
            $table->integer('sub_quantity')->default(1);
            $table->integer('price');
            $table->integer('subtotal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_temp_calculates');
    }
};
