<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\ReCaptcha;

class SendMessage extends FormRequest
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
            'name' => 'required|between:3,50',
            'email' => 'required|email',
            'subject' => 'required|between:5,255',
            'body' => 'required|min:100,2000',
            'recaptcha' => new ReCaptcha,
        ];
    }
}
