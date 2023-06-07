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
        Schema::create('forums', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('restrict');
            $table->string('title');
            $table->longText('content');
            $table->timestamps();
        });
    }
    /* 
    CREATE TABLE forums (
        id INT AUTO_INCREMENT PRIMARY KEY,
        user_id INT,
        FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE RESTRICT
        title VARCHAR(255),
        content LONGTEXT,
        created_at DATETIME,
        updated_at DATETIME,
    );
    */


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('forums');
    }
};