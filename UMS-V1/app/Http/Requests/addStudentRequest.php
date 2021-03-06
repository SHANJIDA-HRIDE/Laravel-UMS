<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class addStudentRequest extends FormRequest
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
            'username' => 'required|min:3',
            'password' => 'required',
            'name' => 'required',
            'dept' => 'required',
            'type' => 'required',
            'cgpa' => 'required'
        ];
    }

    public function messages(){
        return [
            'name.required'=> "can't left empty...."
        ];
    }
}
