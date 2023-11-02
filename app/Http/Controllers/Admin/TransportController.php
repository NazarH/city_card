<?php

namespace App\Http\Controllers\Admin;

use App\Models\Transport;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Transport\Request;

use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class TransportController extends Controller
{
    public function index(): View
    {
        $transport = Transport::all();
        return view('admin.transport.index', compact('transport'));
    }

    public function post(Request $request): RedirectResponse
    {
        $data = $request->validated();
        Transport::create($data);
        return redirect()->route('admin.transport.index');
    }

    public function edit(Transport $item): View
    {
        return view('admin.transport.edit', compact('item'));
    }

    public function update(Request $request, Transport $item): RedirectResponse
    {
        $data = $request->validated();
        $item->update($data);
        return redirect()->route('admin.transport.index');
    }

    public function delete(Transport $item): RedirectResponse
    {
        $item->delete();
        return redirect()->route('admin.transport.index');
    }
}
