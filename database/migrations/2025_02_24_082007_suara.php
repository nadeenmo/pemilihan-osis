<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('suara', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pemilih_id')->nullable()->constrained('pemilih')->onDelete('cascade');
            $table->foreignId('kandidat_id')->nullable()->constrained('kandidat')->onDelete('cascade');
            
            $table->dateTime('waktu_voting')->nullable(false);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('suara');
    }
};