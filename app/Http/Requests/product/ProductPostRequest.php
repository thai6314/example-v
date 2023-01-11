<?php

namespace App\Http\Requests\product;

use Illuminate\Foundation\Http\FormRequest;

class ProductPostRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'=>'required:unique:posts|max:45',
            'image'=>'required',
            'price'=>'required|regex:/^([0-9]*[.])?[0-9]+/',
            'branch'=>'required',
            'description'=>'required',
            'quantity'=>'required|regex:/^\d+$/',
            'category_id'=>'required',
        ];
    }
    public function messages()
    {
        return [
            'name.unique'=>'Name da ton tai',
            'name.required'=>'Name khong duoc de trong.',
            'name.max'=>'Name <= 45 ky tu.',
            'image.required'=>'Image khong duoc de trong',
            'price.required'=>'Name khong duoc de trong.',
            'price.regex'=>'Price la so > 0.',
            'branch.required'=>'Branch khong duoc de trong.',
            'description.required'=>'Description khong duoc de trong.',
            'quantity.required'=>'Quantity khong duoc de trong.',
            'quantity.regex'=>'Quantity > 0',
        ];
    }
}
