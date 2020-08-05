<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidationComboType extends FormRequest
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
            'combo_type_name' => 'required',
        ];
    }
    public function messages(){
        return[
            'combo_type_name.required' => 'Por favor escriba el nombre del tipo de combo',
        ];
    }
}
