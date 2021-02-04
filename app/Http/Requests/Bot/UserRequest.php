<?php

namespace App\Http\Requests\Bot;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return True;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [

            'full_name' =>'required|string|max:200',
            'phone_number' =>'required|max:13|min:13|unique:users',
            'telegram_user_id' =>'required|integer|unique:users',
            
        ];
    }
}
