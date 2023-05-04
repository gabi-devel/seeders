<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('noticias', function (Blueprint $table) {
            $table->id();
            $table->string('titulo', 255);
            $table->text('cuerpo');
            $table->string('imagen', 255)->nullable();
            $table->timestamps();
            $table->unique('titulo');
            $table->bigInteger('autor')->unsigned();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('noticias');
    }
};
