<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PlaceFormRequest extends FormRequest
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
            'name' => 'required|alpha_spaces|unique:places',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Обязательное поле',
            'name.alpha_spaces' => 'Поле не должно содержать цифры',
            'name.unique' => 'Такое поле уже есть',
        ];
    }
}
