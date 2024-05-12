<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules;
use Illuminate\Validation\ValidationException;
use function Laravel\Prompts\error;
use Illuminate\Support\MessageBag;

class RegisterRequest extends BaseRequest
{
    protected $redirectRoute = 'register';
    protected $errorBag = 'register';
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()]
        ];
    }

//    public function messages()
//    {
//        return [
//            'input' => $this->validationdata()['name'],
//            'email' => $this->validationdata()['email'],
//            'password' => $this->validationdata()['password'],
//        ];
//    }
}
