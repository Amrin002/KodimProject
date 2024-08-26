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
        Schema::create('rpd', function (Blueprint $table) {
            $table->id('id_rpd');
            $table->foreignId('id_devisi');
            $table->foreignId('id_kegiatan');
            $table->date('date_rpd');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rpd');
    }
};
