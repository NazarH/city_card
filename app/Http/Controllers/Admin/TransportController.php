<?php

namespace App\Http\Controllers\Admin;

use App\Models\City;
use App\Models\Transport;
use Illuminate\View\View;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Admin\BaseController;
use App\Http\Requests\Admin\Transport\Request;

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
        return view('admin.transport.edit', compact('item'));
    }

    public function update(Request $request, Transport $item): RedirectResponse
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
