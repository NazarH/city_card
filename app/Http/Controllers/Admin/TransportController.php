<?php

namespace App\Http\Controllers\Admin;

use App\Models\City;
use App\Models\Transport;

use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

use App\Http\Controllers\Admin\BaseController;

use App\Http\Requests\Admin\Transport\Request;
use App\Http\Requests\Admin\Transport\UpdateRequest;

class TransportController extends BaseController
{
    public function index(): View
    {
        return $this->service->index();
    }

    public function post(Request $request): RedirectResponse
    {
        $this->service->post($request);
        return redirect()->route('admin.transport.index');
    }

    public function edit(Transport $item): View
    {
        $cities = City::all();
        return view('admin.transport.edit', compact('item', 'cities'));
    }

    public function update(UpdateRequest $request, Transport $item): RedirectResponse
    {
        $this->service->update($request, $item);
        return redirect()->route('admin.transport.index');
    }

    public function delete(Transport $item): RedirectResponse
    {
        $item->delete();
        return redirect()->route('admin.transport.index');
    }
}
