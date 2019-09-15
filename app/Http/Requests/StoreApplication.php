<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\ReCaptcha;

class StoreApplication extends FormRequest
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
            'first_name' => 'required|max:50',
            'last_name' => 'required|max:50',
            'gender' => 'required',
            'marital_status' => 'required',
            'birth_date' => 'required|date',
            'nid' => 'required|numeric',
            'city' => 'required',
            'address' => 'required',
            'contact_number' => 'required',
            'email' => 'required|email',
            'about_us' => 'nullable|max:500',
            'clearify' => 'accepted',
            '_recaptcha' => new ReCaptcha,
        ];
    }
}
