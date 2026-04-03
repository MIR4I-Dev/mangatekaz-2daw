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
        Schema::table('mangas_pedido', function(Blueprint $table){
            $table->unsignedBigInteger('pedidos_id');
            $table->unsignedBigInteger('mangas_id');

            $table->foreign('pedidos_id')->references('id')->on('pedidos')->onDelete('cascade');
            $table->foreign('mangas_id')->references('id')->on('mangas')->onDelete('cascade');
        });    
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
