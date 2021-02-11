<?php

namespace App\Http\Requests;

use App\Contact;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Route;

class EditValidation extends FormRequest
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
        $current_params = Route::current()->parameters();
        return [
                'name' => 'required',
                'mail' => [
                    'required' ,
                    'email:rfc' ,
                    Rule::unique('contacts')->ignore($current_params['id']),
                ],
                'city' => [
                    'exists:countries',
                ],
            'website' => ['nullable' , 'url']
        ];
    }
}
