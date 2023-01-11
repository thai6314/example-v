<?php

namespace App\Http\Requests\category;

use Illuminate\Foundation\Http\FormRequest;

class CategoryAddRequest extends FormRequest
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
            'name'=>'required|unique:posts|max:45',
            'description'=>'required|max:255',
        ];
    }
    public function messages(){
        return [
            'name.required'=>'Name khong duoc bo trong.',
            'name.unique'=>'Name da ton tai.',
            'name.max' =>'Name <= 45 ky tu.',
            'description.required'=>'Description khong duoc bo trong.',
            'description.max'=>'Description <= 255 ky tu.'
        ];
    }
}
