<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditarFactura extends FormRequest
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
            'cantidad'=>'required|string|max:255,'.$this->route('customer')->id,
            'descripcion'=>'required|string|max:255',
            'precio_unidad'=>'required|string|max:255',
            'total'=>'required|string|max:200',
            'fecha'=>'required|string|max:255',
            'cliente'=>'required|string|max:255',
            
        ];
    }
}
