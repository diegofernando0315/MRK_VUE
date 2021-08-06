<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
class BodegaRequest extends FormRequest
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
            'estado'=>'required|string|max:255',
            'num_rem'=>'required|string|max:255',
            'tipo'=>'required|string|max:255',
            'cantidad'=>'required|string|max:200',
            'descripcion'=>'required|string|max:255',
            'fecha_salida'=>'required|string|max:255',
            'fecha_ingreso'=>'required|string|max:255',
            'cliente'=>'required|string|max:255',
        ];
    }
}