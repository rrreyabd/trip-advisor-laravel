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
        Schema::create('comment_photos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('destination_id')->constrained('destinations')->onDelete('restrict');
            $table->foreignId('comment_id')->constrained('comments')->onDelete('restrict');
            $table->string('comment_photo');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comment_photos');
    }
};