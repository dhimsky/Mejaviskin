<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('step_label')->nullable(); // contoh: "Langkah 1 · Pembersih"
            $table->text('description')->nullable();
            $table->string('ingredients')->nullable(); // dipisah koma, contoh: "Niacinamide, Kolagen, Licorice"
            $table->string('net_volume')->nullable(); // contoh: "100 ml"
            $table->string('usage_note')->nullable(); // contoh: "Pagi & Malam"
            $table->string('image')->nullable();
            $table->unsignedInteger('sort_order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
