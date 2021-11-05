<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name'              => 'required|string|min:3|max:250',
            'surname'           => 'required|string|min:3|max:250',
            'email'             => 'required|string|min:3|max:250',
            'login'             => 'required|string|min:3|max:250',
            'password'          => 'required|string|min:8|max:250',
            'passwordRepeat'    => 'required|string|min:8|max:250',
        ];
    }
}
