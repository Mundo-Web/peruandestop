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
        Schema::table('categories', function (Blueprint $table) {
            $table->string('langs')->nullable();
        });
        Schema::table('contacts', function (Blueprint $table) {
            $table->string('langs')->nullable();
        });
        Schema::table('blogs', function (Blueprint $table) {
            $table->string('langs')->nullable();
        });
        Schema::table('products', function (Blueprint $table) {
            $table->string('langs')->nullable();
        });
        
        Schema::table('tags', function (Blueprint $table) {
            $table->string('langs')->nullable();
        });
        
        
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('categories', function (Blueprint $table) {
            $table->dropColumn('langs');
        });
        Schema::table('contacts', function (Blueprint $table) {
            $table->dropColumn('langs');
        });
        Schema::table('blogs', function (Blueprint $table) {
            $table->dropColumn('langs');
        });
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('langs');
        });
        Schema::table('tags', function (Blueprint $table) {
            $table->dropColumn('langs');
        });
    }
};
