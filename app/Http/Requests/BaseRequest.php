<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use function Laravel\Prompts\error;

class BaseRequest extends FormRequest
{
    protected $redirectRoute = 'login';
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    protected function failedValidation(Validator $validator)
    {
        $exception = $validator->getException();

        foreach ($this->validationData() as $validationDatum) {
            error($validationDatum);
        }

        throw (new $exception($validator))
            ->errorBag($this->errorBag)
            ->redirectTo($this->getRedirectUrl());
    }

//    public function messages()
//    {
//        return [
//            'input' => $this->validationData()['name'],
//            'email' => $this->validationData()['email'],
//        ];
//    }
}
