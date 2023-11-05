<?php

namespace App\Http\Controllers\Auth;

use App\Models\Card;
use App\Models\User;

use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Auth\BaseController;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends BaseController
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'phone' => ['required', 'string', 'max:13', 'unique:users'],
            'card_number' => ['required', 'string', 'max:7']
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data): User
    {
        return $this->service->create($data);
    }
}
