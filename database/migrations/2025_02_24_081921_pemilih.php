<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('pemilih', function (Blueprint $table) {
            $table->id('id');
            $table->string('nama_pemilih', 100);
            $table->string('kelas', 50);
            $table->string('nis', 50)->unique();
            $table->string('email', 100)->unique()->nullable();
            $table->string('password', 255);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pemilih');
    }
};