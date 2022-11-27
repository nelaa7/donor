<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('NamaBlog');
            $table->string('Gender');
            $table->integer('Tanggal');
            $table->string('BeratBadan');
            $table->string('Golongan_darah');
            $table->integer('Alamat');
            $table->string('NomerTelepon');
            $table->string('Jumlah_darah');
            $table->integer('Tanggal_koleksi');
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
        Schema::dropIfExists('blogs');
    }
}
