<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AgendaRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => ['required', 'string', 'max:50', 'min:2'],
            'description' => ['required', 'string', 'min:3'],
            'start' => ['required', 'date:Y-m-d\TH:i'],
            'end' => ['required', 'date:Y-m-d\TH:i'],
            'color' => ['required', 'string']
        ];
    }
    public function attributes()
    {
        return [
            'title' => 'titulo',
            'description' => 'descrição',
            'start' => 'data de inicio',
            'end' => 'data de término',
            'color' => 'Prioridade'
        ];
    }


    public function messages()
    {
        return [
            'color.required' => 'Selecione uma prioridade'
            
        ];
    }
}
