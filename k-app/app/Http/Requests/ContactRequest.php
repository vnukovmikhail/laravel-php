<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; // отправка сообщение без авторизации на сайте
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array {
        return [
            'name' => 'required|min:5',
            'email' => 'required|min:3|max:30|email',
            'message' => 'required|min:10|max:500'
        ];
    }
    public function messages() { // меняет сообщение об ошибке
        return [
            'name.required' => 'Поле имя является обязательным',
            'email.required' => 'Поле почты является обязательным',
            'message.required' => 'Поле сообщения является обязательным',

            'name.min' => 'Поле имя должно включать не меньше 5 символов',
            'email.min' => 'Поле почты должно включать не меньше 3 символов',
            'message.min' => 'Поле сообщения должно включать не меньше 10 символов',

            'email.max' => 'Поле почты должно включать не больше 30 символов',
            'message.max' => 'Поле сообщения должно включать не больше 500 символов',
        ];
    }
    /*public function attributes() {
        return [                         это только для изменения названий в сообщениях
            'name' => 'имя',
            'email' => 'почта',
            'message' => 'сообщение'
        ];
    }*/ 

}
