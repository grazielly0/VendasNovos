<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('registro', function (Blueprint $table) {
            $table->increments('id');
            $table->codigo('password');
            $table->produto('produtoTexto');
            $table->quantidade('estoque');
            $table->categoria('categoria');
            $table->dataValidade('dataValiade');
            $table->preco('preco');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registro');
    }
};