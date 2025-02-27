<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('data_yang_dinilai', function (Blueprint $table) {
            $table->id();
            $table->string('pertanyaan_penilaian');
            $table->string('indikator_penilaian');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('data_yang_dinilai');
    }
};
