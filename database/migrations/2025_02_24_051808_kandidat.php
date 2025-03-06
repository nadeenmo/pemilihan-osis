<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('kandidat', function (Blueprint $table) {
            $table->id('id');
            $table->string('nama_kandidat', 100);
            $table->string('kelas', 50);
            $table->text('visi');
            $table->text('misi');
            $table->string('foto')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('kandidat');
    }
};