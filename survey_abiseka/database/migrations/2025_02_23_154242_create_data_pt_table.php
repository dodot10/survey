<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('data_pt', function (Blueprint $table) {
            $table->bigIncrements('id_pt');
            $table->text('nama_pt');
            $table->string('tipe_pt', 50);
            $table->string('kode_pt', 50);
            $table->text('status_pt');
            $table->text('alamat_pt');
            $table->string('email_pt')->unique();
            $table->string('no_telepon_pt', 20);
            $table->text('website_pt')->nullable();
            $table->text('npwp_pt')->nullable();
            $table->string('tanggal_berdiri_pt', 50);
            $table->string('no_sk_pendirian_pt', 50);
            $table->string('tanggal_pendirian_pt', 50);
            $table->string('fax_pt', 20)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('data_pt');
    }
};
