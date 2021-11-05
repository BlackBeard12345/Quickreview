<?php

namespace App\Http\Requests\Films;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'title'     => 'required|string|max:250',
            'kind'      => 'required|string|max:250',
            'date'      => 'required|string|max:250',
            'producer'  => 'required|string|max:250',
            'image'     => 'nullable|file|max:5120',
        ];
    }
}
