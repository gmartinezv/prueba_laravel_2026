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
        Schema::create('calificacion', function (Blueprint $table) {
             $table->id();
            $table->text('contenido')->nullable();
            $table->Integer('puntaje')->nullable();
            $table->BigInteger('user_id')->unsigned(); 
            $table->Integer('hacia_cu_in')->unsigned(); 
            $table->BigInteger('curso_instructor_id')->unsigned();  
             $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('calificacion');
    }
};
