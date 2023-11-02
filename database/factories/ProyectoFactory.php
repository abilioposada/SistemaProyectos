<?php namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Proyecto>
 */
class ProyectoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        # Hacer cálculos
        $montoPlanificado   = $this->faker->randomFloat( $nbMaxDecimals = 2, $min = 0, $max = 1000000 );
        $montoPatrocinado   = $this->faker->randomFloat( $nbMaxDecimals = 2, $min = 0, $max = $montoPlanificado );
        $montoFondosPropios = $montoPlanificado - $montoPatrocinado;

        # Generar data falsa
        return [
            "nombreProyecto" => ucfirst( $this->faker->words( $nb = 3, $asText = true ) ),

            "fuenteFondos"   => $this->faker->randomElement( [
                "empleo",
                "prestamo",
                "ahorro",
                "bienes raices",
                "alquiler",
                "herencia",
            ] ),

            "montoPlanificado"   => $montoPlanificado,
            "montoPatrocinado"   => $montoPatrocinado,
            "montoFondosPropios" => $montoFondosPropios,
        ];
    }
}
