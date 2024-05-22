<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('viajes_tipo', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('viajes_id');
            $table->unsignedBigInteger('tipo_viajes_id');
        
        
        
            $table->foreign('viajes_id')->references('id')->on('viajes')->onDelete('cascade');
            $table->foreign('tipo_viajes_id')->references('id')->on('tipo_viajes')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('viajes_tipo');
    }
}; 
