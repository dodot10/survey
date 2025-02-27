<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('institusi_pemakai', function (Blueprint $table) {
            $table->id('id_institusi');
            $table->text('nama_institusi');
            $table->text('alamat');
            $table->string('kontak', 50);
            $table->foreignId('id_user')->constrained('user')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('institusi_pemakai');
    }
};
