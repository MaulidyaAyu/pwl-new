<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('destinasis', function (Blueprint $table) {
            $table->id('id_destinasi');
            $table->string('gambar');
            $table->string('judul');
            $table->longText('keterangan');
            $table->string('alt');
            $table->string('path_detail_destinasi');
            $table->string('tampil');
            $table->integer('harga');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detinasis');
    }
};
