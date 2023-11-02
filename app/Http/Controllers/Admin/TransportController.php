<?php

namespace App\Http\Controllers\Admin;

use App\Models\Transport;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Transport\Request;

class TransportController extends Controller
{
    public function index()
    {
        $transport = Transport::all();
        return view('admin.transport.index', compact('transport'));
    }

    public function post(Request $request)
    {
        $data = $request->validated();
        Transport::create($data);
        return redirect()->route('admin.transport.index');
    }

    public function edit(Transport $item)
    {
        return view('admin.transport.edit', compact('item'));
    }

    public function update(Request $request, Transport $item)
    {
        $data = $request->validated();
        $item->update($data);
        return redirect()->route('admin.transport.index');
    }

    public function delete(Transport $item)
    {
        $item->delete();
        return redirect()->route('admin.transport.index');
    }
}
