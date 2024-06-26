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
    
    {//database/migration
        Schema::create('estabelecimentos', function (Blueprint $table) {
            $table->id();
            $table->string('nome',100);
            $table->string("descricao",300);
            $table->string("imagem",300);
            $table->string("telefone",20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estabelecimentos');
    }
};
