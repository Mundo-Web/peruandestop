<?php

use App\Models\Products;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->longText('slug')->nullable()->after('producto');
        });

        $products = Products::all();
        foreach ($products as $product) {
            $slugExist = Products::where('slug', Str::slug($product->producto))->exists();
            if ($slugExist) {
                $product->slug = Str::slug($product->producto) . '-' . $product->id;
            } else {
                $product->slug = Str::slug($product->producto);
            }
            $product->save();
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('slug');
        });
    }
};
