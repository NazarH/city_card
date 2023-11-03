<?php

namespace App\Http\Controllers\User;

use App\Models\Card;
use Illuminate\View\View;
use App\Models\CardHistory;
use App\Models\TripHistory;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\RedirectResponse;
use App\Http\Requests\User\Profile\Request;
use App\Http\Controllers\User\BaseController;

class IndexController extends BaseController
{
    public function index(): View
    {
        return $this->service->index();
    }

    public function add(Request $request): RedirectResponse
    {
        return $this->service->add($request);
    }
}
