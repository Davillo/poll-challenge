<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PollStoreRequest extends FormRequest
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
            'description' => 'required|string',
            'options' => 'array|required'
        ];
    }

    function messages(){
        return [
            'description.required' => 'A descrição da enquete é obrigatória',
            'options.required' => 'É necessário informar as opções da enquete'
        ];
    }
}
