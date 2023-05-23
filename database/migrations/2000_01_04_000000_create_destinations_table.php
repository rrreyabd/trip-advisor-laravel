<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use PhpParser\Node\NullableType;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('destinations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('rating_id')->constrained('ratings')->onDelete('restrict');
            $table->string('destination_name');
            // $table->string('destination_type');
            $table->enum("destination_type", ["wisata", "hotel","restoran"]);
            $table->string('category')->nullable();
            $table->string('address');
            $table->string('city');
            $table->string('province');
            $table->text('map');
            $table->string('website')->nullable();
            $table->string('contact');
            $table->string('photo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('destinations');
    }
};