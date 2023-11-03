<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;

use App\Services\User\UserService;
use App\Http\Controllers\Controller;

class BaseController extends Controller
{
    protected UserService $service;
    public function __construct(UserService $service)
    {
        $this->service = $service;
    }
}
