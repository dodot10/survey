<?php

namespace App\Models;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    public function up() {
        Schema::create('prodi', function (Blueprint $table) {
            $table->id('id_prodi');
            $table->string('kode_prodi', 50);
            $table->string('nama_prodi', 255);
            $table->string('jenjang', 50);
            $table->foreignId('id_universitas')->constrained('data_pt')->onDelete('cascade');
            $table->string('akreditasi', 50);
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('prodi');
    }
};
