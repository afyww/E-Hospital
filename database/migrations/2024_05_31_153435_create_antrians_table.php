<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('antrians', function (Blueprint $table) {
            $table->id();
            $table->date('pada_tanggal');
            $table->foreignId('pasien_id')->constrained('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('dokter_id')->constrained('users')->onUpdate('cascade')->onDelete('cascade');
            $table->longText('penyakit');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('antrians');
    }
};
