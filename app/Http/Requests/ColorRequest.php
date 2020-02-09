<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ColorRequest extends FormRequest
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
            
            'name' => 'required|string',
            'code' => 'required|string',
            'is_active' => 'required|boolean'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'The name is empty.',
            'code.required' => 'The color is empty.',
            'is_active.required' => 'The status not selected.',
            'name.string' => 'The name must be a string.',
            'code.string' => 'The color must be a string.',
            'is_active.boolean' => 'The status must be a boolean.'
        ];
    }
}
