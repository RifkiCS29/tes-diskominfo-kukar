<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblDataPegawaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_data_pegawai', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('nip');
            $table->string('nama');
            $table->string('alamat');
            $table->enum('jabatan',['Ess2', 'Ess3', 'Ess4', 'Staff']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_data_pegawai');
    }
}
