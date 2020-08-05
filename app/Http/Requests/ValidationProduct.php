<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class ValidationProduct extends FormRequest
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
            'product_name' => 'required',
            'product_price' =>'required',
            'product_trademark' =>'required',
            'product_net_content' =>'required',
            'product_name_images' =>'nullable',
            'product_state' => 'nullable'
        ];
    }

    public function messages(){
        return[
            'product_name.required' => 'Por favor escriba el nombre del producto',
            'product_trademark.required' => 'Por favor escriba la marca del producto',
            'product_net_content.required' => 'Por favor escriba el contenido neto del producto',
            'product_price.required' => 'Por favor escriba el precio del producto'
        ];
    }
}
