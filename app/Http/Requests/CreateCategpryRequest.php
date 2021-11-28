<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateCategpryRequest extends FormRequest
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
            "name"=> "required | max:20 | min:10",
            "description"=>"required",
        ];
    }

    public function messages(): array
    {
        return[
            'name.required'=>'danh mục không để trống',
            'name.min'=>'danh mục không được it hơn 10 ký tự',
            'name.max'=>'danh mục không được nh iềuhơn 20 ký tự',
            'description.required'=>'danh mục không để trống',
        ];
    }
}
