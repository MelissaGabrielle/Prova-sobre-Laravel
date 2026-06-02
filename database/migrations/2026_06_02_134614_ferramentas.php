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
        Schema::create('ferramentas' , function (Blueprint $table){
            $table->id();

            $table->foreignId('categorias_id')
                ->constrained()
                ->onDelete('cascade');

            $table->string('nome');
            $table->string('marca');
            $table->string('modelo');

            $table->integer('quanti_estoque');
            $table->integer('estoque_min');

            $table->timestamps();

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
