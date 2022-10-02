<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class infoImgMulti extends FormRequest
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

            'description' => 'required',
            'type' => 'required',

        ];
    }

    public function messages(){
        return[

            'description.required' => 'Must be write',
            'type.required' => 'Must select a type',


        ];
    }
}
