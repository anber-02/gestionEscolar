<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveDocenteRequest extends FormRequest
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
            //
            'nombre' => 'required',
            'a_paterno' => 'required',
            'a_materno' => 'required',
            'num_tel' => 'required',
            'email' => 'required',
            'rfc' => 'required',
            'password' => 'required',
            'grupo_id' => []
        ];
        // 'nombre',
        // 'a_paterno',
        // 'a_materno',
        // 'rfc',
        // 'materia',
        // 'num_tel',
        // 'email',
        // 'password',
        // 'rol',
    }
}
