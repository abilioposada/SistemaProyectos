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
        Schema::create( "proyectos", function ( Blueprint $tbl ) {
            $tbl->id();

            $tbl->string( "nombreProyecto" );

            $tbl->enum( "fuenteFondos", [
                "empleo",
                "prestamo",
                "ahorro",
                "bienes raíces",
                "alquiler",
                "herencia",
            ] )
                ->default( "empleo" )
                ->comment( "Procedencia de Fondos" );

            $tbl->decimal( "montoPlanificado" )
                ->default( 0.0 );

            $tbl->decimal( "montoPatrocinado" )
                ->default( 0.0 );

            $tbl->decimal( "montoFondosPropios" )
                ->default( 0.0 );

            $tbl->timestamps();
        } );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists( "proyectos" );
    }
};
