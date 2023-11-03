<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;

use App\Services\Auth\AuthService;
use App\Http\Controllers\Controller;

class BaseController extends Controller
{
    protected AuthService $service;
    public function __construct(AuthService $service)
    {
        $this->service = $service;
    }
}
