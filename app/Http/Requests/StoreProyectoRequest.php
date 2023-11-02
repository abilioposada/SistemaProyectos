<?php namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreProyectoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            "nombreProyecto" => [ "bail", "required", "string", "between:3,255" ],
            
            "fuenteFondos" => Rule::in( [
                "empleo",
                "prestamo",
                "ahorro",
                "bienes raíces",
                "alquiler",
                "herencia",
            ] ),

            "montoPlanificado"   => [ "bail", "numeric", "min:0", "regex:/^\d*(\.\d{1,2})?$/" ],
            "montoPatrocinado"   => [ "bail", "numeric", "min:0", "regex:/^\d*(\.\d{1,2})?$/", "lte:montoPlanificado" ],
            "montoFondosPropios" => [ "bail", "numeric", "min:0", "regex:/^\d*(\.\d{1,2})?$/", "lte:montoPlanificado" ],
        ];
    }
}
