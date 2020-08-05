<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidationBase extends FormRequest
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
            'base_name' => 'required',
            'base_price' =>'required',
            'base_measure' =>'required',
            'base_description' =>'required',
            'base_state' => 'nullable'
        ];
    }

    public function messages(){
        return[
            'base_name.required' => 'Por favor escriba el nombre de la base',
            'base_measure.required' => 'Por favor escriba la marca de la base',
            'base_description.required' => 'Por favor escriba una descripcion',
            'base_price.required' => 'Por favor escriba el precio de la base'
        ];
    }
}
