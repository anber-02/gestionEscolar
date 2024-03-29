<?php

namespace App\Http\Requests;

use GuzzleHttp\Psr7\Request;
use Illuminate\Foundation\Http\FormRequest;

class SaveAlumnoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // verifica si la peticion esta autorizada
        // para el usuario
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        if($this->isMethod('PATCH')){
            // retornamos diferentes validaciones
            return [
                //
                    'nombre' => 'required',
                    'a_paterno' => 'required',
                    'a_materno' => 'required',
                    'direccion' => 'required',
            ];
        }

        return [
            //
                'nombre' => 'required',
                'a_paterno' => 'required',
                'a_materno' => 'required',
                'matricula' => 'required|unique:alumnos',
                'direccion' => 'required',
                'email' => 'required|unique:alumnos',
                'telefono' => 'required|unique:alumnos',
        ];
    }
}
