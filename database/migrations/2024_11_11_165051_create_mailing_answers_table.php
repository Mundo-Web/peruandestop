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
        Schema::create('mailing_answers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('mailing_id');
            $table->longText('subject');
            $table->longText('content');
            $table->timestamps();

            $table->foreign('mailing_id')->references('id')->on('messages')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mailing_answers');
    }
};
