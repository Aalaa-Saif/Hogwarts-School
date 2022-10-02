<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class infoRequest extends FormRequest
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
            'name' => 'required|max:100',
            'type' => 'required',

        ];
    }

    public function messages(){
        return[
            'name.required' => 'Name must be exist',
            'name.max'=>'Name letter max is 100',
            'type.required' => 'Must select a type',


        ];
    }
}
