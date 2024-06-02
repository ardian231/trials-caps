<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUmkmsTable extends Migration
{
   public function up()
{
    Schema::create('umkms', function (Blueprint $table) {
        $table->id();
        $table->string('nama_pemilik');
        $table->string('nama_usaha');
        $table->string('email');
        $table->string('kategori_usaha');
        $table->string('jenis_usaha');
        $table->string('lamanya_usaha');
        $table->string('jumlah_karyawan');
        $table->string('omset_tahunan');
        $table->string('jenis_investasi');
        $table->string('modal_diinginkan');
        $table->text('lokasiusaha');
        $table->string('proposal');
        $table->timestamps();
    });
}


    public function down()
    {
        Schema::dropIfExists('umkms');
    }
}
