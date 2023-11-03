<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Auth\BaseController;

class AdminLoginController extends BaseController
{
    public function store(Request $request): RedirectResponse
    {
        return $this->service->admin_login($request);
    }
}
