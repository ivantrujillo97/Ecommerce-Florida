<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidationCombo extends FormRequest
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
            'combo_name' => 'required',
            'combo_type_id' =>'required',
            'product_id' => 'required',
            'combo_price_percentage' => 'required'
        ];
    }

    public function messages(){
        return[
            'combo_name.required' => 'Por favor escriba el nombre de la combo',
            'combo_type_id.required' => 'Seleccione el tipo de combo',
            'product_id.required' => 'Selecione los productos',
            'combo_price_percentage.required' => 'Ingresa el porcentaje de ganancia'
        ];
    }
}
