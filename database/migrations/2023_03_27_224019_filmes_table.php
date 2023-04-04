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
        Schema::create('filme', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('filme');
            $table->string('ator');
            $table->string('sinopse');
            $table->string('datalanca');
            $table->string('capa');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        
    }
};