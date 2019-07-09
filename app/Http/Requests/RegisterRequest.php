<?php

namespace App\Http\Requests;

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
            'name'=>'required',
            'email'=> 'required|email|max:255',
            'password'=>'required|min:5',
        ];
    }
    
    public function messages()
    {
        return [
        'name.required'=>'Vui lòng nhập tên',
        
        'email.required' => 'Vui lòng nhập email',
        'email.email'=>'Không đúng định dạng',
        'password.required' => 'Vui lòng nhập password',
        ];
}
}