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
        Schema::create('servicos', function (Blueprint $table) {
            $table->id();
            $table->string('nome',100);
            $table->string("contato",20);
            $table->string("email",200);
            $table->string("detalhamento",300);
            $table->string("valor_estimado",100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('servicos');
    }
};
