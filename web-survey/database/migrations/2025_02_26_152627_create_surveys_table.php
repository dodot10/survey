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
        Schema::create('surveys', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Judul survei
            $table->text('description')->nullable(); // Deskripsi survei
            $table->enum('status', ['draft', 'published', 'closed'])->default('draft'); // Status survei
            $table->foreignId('created_by')->constrained('users')->onDelete('cascade'); // Relasi ke users
            $table->dateTime('start_date')->nullable(); // Tanggal mulai survei
            $table->dateTime('end_date')->nullable(); // Tanggal selesai survei
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surveys');
    }
};
