<?php

namespace App\Services\Auth;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\RedirectResponse;

class AuthService
{
    public function user_login(Request $request): RedirectResponse
    {
        $data = $request->validate(
            [
                'phone' => ['required', 'string'],
                'number' => ['required', 'string']
            ]
        );
        $user = User::where('phone', $data['phone'])->first();
        if ($user === null) return redirect()->route('login');
        foreach($user->cards as $card)
        {
            if ($card->number === $data['number']) {
                Auth::login($user);
                return redirect()->route('welcome');
            } else return redirect()->route('login');
        }
    }

    public function admin_login(Request $request): RedirectResponse
    {
        $data = $request->validate(
            [
                'login' => ['required', 'string'],
                'password' => ['required', 'string']
            ]
        );
        if(Auth::attempt($request->only('login', 'password'))){
            return redirect()->route('admin.index');
        } else return redirect()->route('login');
    }
}
