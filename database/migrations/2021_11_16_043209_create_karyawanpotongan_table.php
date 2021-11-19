<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKaryawanpotonganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('karyawanpotongan', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('karyawan_id')->unsigned();
            $table->bigInteger('potongan_id')->unsigned();
            $table->string('periode');
            $table->integer('nominal');
            $table->foreign('karyawan_id')->references('id')
                ->on('karyawan')->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('potongan_id')->references('id')
                ->on('potongan')->onUpdate('cascade')
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
        Schema::dropIfExists('karyawanpotongan');
    }
}
