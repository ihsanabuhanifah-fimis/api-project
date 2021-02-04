<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIdentitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('identitas', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('tempat_lahir');
            $table->integer('tanggal_lahir');
            $table->integer('bulan_lahir');
            $table->year('tahun_lahir');
            $table->mediumText('alamat');
            $table->string('nomor_handphone');
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
        Schema::dropIfExists('identitas');
    }
}
