<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;


use App\Http\Controllers\Controller;
use App\Services\Admin\AdminService;

class BaseController extends Controller
{
    protected AdminService $service;
    public function __construct(AdminService $service)
    {
        $this->service = $service;
    }
}
