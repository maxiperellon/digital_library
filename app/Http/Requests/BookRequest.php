<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
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
            'isbn' => 'required|digits_between:12,13|numeric',
            'name' => 'required|alpha',
            'publisher' => 'required|alpha_num',
            'edition' => 'string',
            'author' => 'required|alpha',
            'category' => 'required|alpha'
        ];
    }
}
