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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('destination_id')->constrained('destinations')->onDelete('restrict');//many to one
            $table->foreignId('user_id')->constrained('users')->onDelete('restrict');//many to one
            $table->foreignId('rating_id')->constrained('ratings')->onDelete('restrict');//one to one
            $table->string('title');
            $table->enum("destination_type", ["wisata", "hotel","restoran"]);
            $table->longText('content');
            $table->date('date');
            $table->string('visit_type');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};