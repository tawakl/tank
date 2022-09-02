<?php

namespace App\Blog\Services\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServicesRequest extends FormRequest
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

        ];
    }
    public function getImageData()
    {
        $directory_path = explode('/' . basename($this->input('image_url')), $this->input('image_url'))[0];
        return  basename($directory_path)."/".basename($this->input('image_url'));
    }
}
