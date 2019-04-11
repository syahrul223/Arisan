<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTArisan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_arisan', function (Blueprint $table) {
            $table->bigIncrements('id_arisan');
            $table->enum('status_menang', ['menang', 'belum_menang']);
            $table->enum('status_bayar', ['lunas', 'belum_bayar']);
            $table->integer('id_anggota')->foreign()->references('id_anggota')->on('t_anggota')->onDelete('cascade');
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
        Schema::dropIfExists('t_arisan');
    }
}
