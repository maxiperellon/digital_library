<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'dni' => 'required|digits_between:7,8|numeric',
            'name' => 'required|alpha',
            'career' => 'required|alpha',
            'email' => 'email|required',
            'phone' => 'required|numeric',
            'address' => 'required|alpha'
        ];
    }
}
