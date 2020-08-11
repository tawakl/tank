<?php

namespace App\Blog\Users\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CreateUsersRequest extends FormRequest
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
            'name' => 'required|max:190',
            'email' => [
                'required',
                Rule::unique('users'),
                'email'
            ],
            'mobile_number' => ['required', 'regex:/(01)[0-9]{9}/'],
            'password' => 'required'
        ];
    }
}
