<?php

namespace App\Http\Requests\Admin\Transport;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class Request extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Auth::user()->role === 'admin';
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'type' => ['required', 'string', 'max:255'],
            'number' => ['required', 'string', 'max:255', 'unique:transports'],
            'city' => ['required', 'string', 'max:255'],
            'price' => ['required', 'string', 'max:255']
        ];
    }
}
