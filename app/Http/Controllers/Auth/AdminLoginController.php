<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminLoginController extends Controller
{
    public function store(Request $request){
        $data = $request->validate(
            [
                'login' => ['required', 'string'],
                'password' => ['required', 'string']
            ]
        );
        if(Auth::attempt($request->only('login', 'password'))){
            return redirect()->route('admin.index');
        }
    }
}
