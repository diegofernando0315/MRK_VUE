<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
class UsuarioRequest extends FormRequest
{
     /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'cedula'=>'required|string|max:255',
            'nombre'=>'required|string|max:255',
            'apellido'=>'required|string|max:255',
            'celular'=>'required|string|max:255',
            'telefono'=>'required|string|max:255',
            'correo'=>'required|string|max:255',
            'direccion'=>'required|string|max:255',
            'usuario'=>'required|string|max:255',
            'estado'=>'required|string|max:255',
            'rol'=>'required|string|max:255'
        ];
    }
}

