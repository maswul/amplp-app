<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asets', function (Blueprint $t) {
            $t->id();
            $t->timestamps();
            $t->string('name')->nullable();
            $t->string('nomor')->nullable();
            $t->string('detail')->nullable();
            $t->integer('kategori_id')->nullable();
            $t->date('tgl_beli')->nullable();
            $t->string('lokasi_simpan')->nullable();
            $t->integer('pic_id')->nullable();
            $t->integer('dipinjam')->nullable();
            $t->integer('peminjam_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asets');
    }
}
