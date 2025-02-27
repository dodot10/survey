<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('surveyer', function (Blueprint $table) {
            $table->id('id_surveyer');
            $table->text('nama_surveyer');
            $table->string('email_surveyer')->unique();
            $table->string('telepon_surveyer', 20);
            $table->foreignId('id_universitas')->constrained('data_pt', 'id_pt')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('surveyer');
    }
};
