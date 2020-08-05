<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidationProductcategory extends FormRequest
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
            'product_category_name' => 'required',
        ];
    }
    public function messages(){
        return[
            'product_category_name.required' => 'Por favor escriba el nombre del tipo de producto',
        ];
    }
}
