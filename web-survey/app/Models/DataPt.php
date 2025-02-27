<?php

namespace App\Models;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    public function up() {
        Schema::create('data_pt', function (Blueprint $table) {
            $table->id('id_pt');
            $table->string('nama_pt', 255);
            $table->string('tipe_pt', 100);
            $table->string('kode_pt', 50)->unique();
            $table->string('status_pt', 100);
            $table->text('alamat_pt');
            $table->string('email_pt', 255)->nullable();
            $table->string('no_telepon_pt', 20)->nullable();
            $table->string('website_pt', 255)->nullable();
            $table->string('npwp_pt', 50)->nullable();
            $table->date('tanggal_berdiri_pt')->nullable();
            $table->string('no_sk_pendirian_pt', 50)->nullable();
            $table->date('tanggal_pendirian_pt')->nullable();
            $table->string('fax_pt', 50)->nullable();
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('data_pt');
    }
};
