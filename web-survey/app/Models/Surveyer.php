<?php

namespace App\Models;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    public function up() {
        Schema::create('surveyer', function (Blueprint $table) {
            $table->id('id_surveyer');
            $table->string('nama_surveyer', 255);
            $table->string('email_surveyer', 255)->unique();
            $table->string('telepon_surveyer', 20);
            $table->foreignId('id_universitas')->constrained('data_pt')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('surveyer');
    }
};

