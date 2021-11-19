<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKaryawanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('karyawan', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->integer('nik');
            $table->string('nama_depan');
            $table->string('nama_belakang');
            $table->string('jenis_kelamin');
            $table->bigInteger('jabatan')->unsigned();
            $table->bigInteger('kantor')->unsigned();
            $table->string('agama');
            $table->string('pendidikan');
            $table->string('alamat');
            $table->string('avatar');
            $table->string('gaji');
            $table->foreign('user_id')->references('user_id')
                ->on('userkaryawan')->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('jabatan')->references('id')
                ->on('jabatan')->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('kantor')->references('id')
                ->on('kantor')->onUpdate('cascade')
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
        Schema::dropIfExists('karyawan');
    }
}
