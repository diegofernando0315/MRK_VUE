<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
class AsistenciaRequest extends FormRequest
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
            'inicio'=>'required|string|max:255',
            'final'=>'required|string|max:255',
            'total_dia'=>'required|string|max:255',
            'fecha'=>'required|string|max:255'
            
        ];
    }
}

