<?php

namespace App\Models;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    public function up() {
        Schema::create('data_yang_dinilai', function (Blueprint $table) {
            $table->id();
            $table->text('pertanyaan_penilaian');
            $table->text('indikator_penilaian');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('data_yang_dinilai');
    }
};
