<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKaryawanpendapatanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('karyawanpendapatan', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('karyawan_id')->unsigned();
            $table->bigInteger('pendapatan_id')->unsigned();
            $table->string('periode');
            $table->integer('nominal');
            $table->foreign('karyawan_id')->references('id')
                ->on('karyawan')->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('pendapatan_id')->references('id')
                ->on('pendapatan')->onUpdate('cascade')
                ->onDelete('cascade');
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
        Schema::dropIfExists('karyawanpendapatan');
    }
}
