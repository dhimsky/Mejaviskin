<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->longText('full_ingredients')->nullable()->after('ingredients'); // daftar INCI lengkap dari label
            $table->text('how_to_use')->nullable()->after('usage_note'); // instruksi cara pemakaian lengkap
            $table->text('benefits')->nullable()->after('how_to_use'); // satu manfaat per baris
            $table->boolean('is_coming_soon')->default(false)->after('is_active'); // produk draft/belum rilis
        });
    }

    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn(['full_ingredients', 'how_to_use', 'benefits', 'is_coming_soon']);
        });
    }
};
