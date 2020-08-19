<?php

namespace App\Blog\Profile\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
{


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|regex:/^[\pL\s\d]+$/u|max:191|min:3',
            'email' => [
                'required',
                Rule::unique('users')->ignore($this->id),
                'email'
            ],
            'mobile_number' => ['required', 'regex:/(01)[0-9]{9}/',Rule::unique('users')->ignore($this->id)],
            'profile_picture' => 'nullable|image',
            'password' => 'nullable|min:8|confirmed',
        ];
    }
}
