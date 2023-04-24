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
        Schema::create('forms', function (Blueprint $table) {
            $table->id();
            $table->nombre('nombre');
            $table->apellido1('apellido1');
            $table->apellido2('apellido2');
            $table->email('email');
            $table->telefono('telefono');
            $table->genero('genero');
            $table->fNacimiento('fNacimiento');
            $table->nPadre('nPadre');
            $table->nMadre('nMadre');
            $table->nHermanos('nHermanos');
            $table->adulto('adulto');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('forms');
    }
};
