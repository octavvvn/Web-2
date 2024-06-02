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
        Schema::create('dokters', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('spesialis');
            $table->unsignedBigInteger('unit_kerja_id'); // Menambah kolom unit_kerja_id
            $table->foreign('unit_kerja_id')->references('id')->on('unit_kerjas')->onDelete('cascade'); // Menambah foreign key ke unit_kerjas
            $table->timestamps(); // Menambah kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dokters');
    }
};
