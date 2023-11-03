<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

use App\Http\Controllers\Auth\BaseController;

class UserLoginController extends BaseController
{
    public function store(Request $request): View|RedirectResponse
    {
        return $this->service->user_login($request);
    }
}
