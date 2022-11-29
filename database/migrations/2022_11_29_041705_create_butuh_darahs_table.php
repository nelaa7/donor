<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateButuhDarahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('butuh_darahs', function (Blueprint $table) {
            $table->id();
            $table->string('subject');
            $table->string('gender');
            $table->string('berat_badan');
            $table->string('golongan_darah');
            $table->text('alamat');
            $table->string('no_telp');
            $table->integer('jumlah_darah');
            $table->date('tanggal_koleksi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('butuh_darahs');
    }
}
