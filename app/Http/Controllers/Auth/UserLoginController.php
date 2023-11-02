<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserLoginController extends Controller
{
    public function store(Request $request){
        $data = $request->validate(
            [
                'phone' => ['required', 'string'],
                'number' => ['required', 'string']
            ]
        );

        $user = User::where('phone', $data['phone'])->first();
        foreach($user->cards as $card){
            if($card->number === $data['number']){
                Auth::login($user);
                return redirect()->route('home');
            }
        }
    }
}
