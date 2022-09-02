<?php

namespace App\Http\Requests;

use App\Rules\PasswordConfirmation;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class UserRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($this->user)],
            'password' => ['required', 'string', 'min:8'],
            'password_confirmation'=>['required', 'string', 'min:8', new PasswordConfirmation($this->password)],
             'cpf'=>['required', 'string', 'max:11', 'min:11'],
             'matricula'=>['required', 'string', 'max:9'],
             'celular'=>['required', 'string','min:11', 'max:11'],
             'sector_id'=>['required', 'string', 'min:1']
             
            
        ];

    } 

    
    
}
