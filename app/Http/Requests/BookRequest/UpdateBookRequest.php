<?php

namespace App\Http\Requests\BookRequest;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBookRequest extends FormRequest
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
            'isbn' => 'required',
            'name' => 'required|string',
            'publisher' => 'required|string',
            'edition' => 'required|string',
            'author' => 'required|string',
            'category' => 'required|string',
            'condition' => 'required|boolean',
        ];
    }
}
