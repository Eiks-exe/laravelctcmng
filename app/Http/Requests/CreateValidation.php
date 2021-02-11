<?php

namespace App\Http\Requests;

use App\Contact;
use Illuminate\Foundation\Http\FormRequest;

class CreateValidation extends FormRequest
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
            'name' => 'required',
            'mail' => ['required','email:rfc' ,'unique:contacts,mail'],
            'city' => [
                'exists:countries',
            ],
            'website' => ['nullable' , 'url']
        ];
    }
}
