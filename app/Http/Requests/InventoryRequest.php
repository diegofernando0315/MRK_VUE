<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
class Inventory extends FormRequest
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
            'cantidad'=>'required|string|max:255',
            'estado'=>'required|string|max:255',
            'tipo'=>'required|string|max:255',
            'fecha'=>'required|string|max:255'

        ];
    }
}

