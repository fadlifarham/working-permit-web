<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkingPermitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('working_permit', function (Blueprint $table) {
            $table->increments('id');
            $table->text('uraian_pekerjaan');
            $table->string('lokasi');
            $table->string('area_kerja');
            $table->string('manager');
            $table->string('pengawas');
            $table->string('k3');
            $table->string('app');
            $table->string('pemohon');
            $table->dateTime('tgl_mulai');
            $table->dateTime('tgl_selesai');
            $table->time('jam_mulai');
            $table->time('jam_selesai');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('working_permit');
    }
}
