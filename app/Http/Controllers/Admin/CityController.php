<?php

namespace App\Http\Controllers\Admin;

use App\Models\City;
use App\Models\Transport;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\City\Request;
use App\Http\Controllers\Admin\BaseController;

use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class CityController extends BaseController
{
    public function index(): View
    {
        $cities = City::all();
        return view('admin.city.index', compact('cities'));
    }

    public function add(Request $request): RedirectResponse
    {
        return $this->service->add($request);
    }

    public function delete(City $item): RedirectResponse
    {
        return $this->service->delete();

    }
}
