<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id('id')->autoIncrement();
            $table->string('nik')->unique();
            $table->string('nama');
            $table->string('tempat_lahir');
            $table->date('tgl_lahir');
            $table->string('no_telp');
            $table->string('dukuh');
            $table->string('rw');
            $table->string('rt');
            $table->string('username')->unique();
            $table->string('password');
            $table->unsignedBigInteger('role_id')->default(1);
            // $table->unsignedBigInteger('fk_id_kel');
            // $table->unsignedBigInteger('fk_id_kec');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('status', function (Blueprint $table) {
            $table->id('id_status');
            $table->string('proses');
            $table->timestamps();
        });

        Schema::create('antrean_bbm', function (Blueprint $table) {
            $table->id('id_bbm')->autoIncrement();
            $table->string('ktp_bbm');
            $table->string('lokasi');
            $table->string('lama_usaha');
            $table->string('foto_usaha');
            $table->string('spbu');
            // $table->date('tgl_antre_dom')->useCurrent();
            $table->unsignedBigInteger('fk_id_user');
            $table->unsignedBigInteger('fk_status');
            $table->timestamps();
        });

        // Foreign Key
        Schema::table('antrean_bbm', function (Blueprint $table) {
            $table->foreign('fk_id_user')->references('id')->on('users');
            $table->foreign('fk_status')->references('id_status')->on('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
