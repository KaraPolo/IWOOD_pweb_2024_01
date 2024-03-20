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
        Schema::disableForeignKeyConstraints();

        Schema::table('sugestaos', function (Blueprint $table) {
           $table->foreignId('tiposugestao_id')->nullable()
            ->constrained('tiposugestaos')->after('id');
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('sugestaos', function (Blueprint $table) {
            //
        });
    }
};
