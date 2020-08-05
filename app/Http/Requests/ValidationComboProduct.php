<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidationComboProduct extends FormRequest
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
            'base_id' => 'required',
            'combo_price' =>'required'
        ];
    }

    public function messages(){
        return[
            'base_id.required' => 'Selecione la base que vas a utilizar',
            'combo_price.required' => 'Pon el porcentaje que deseas ganar',

        ];
    }
}
