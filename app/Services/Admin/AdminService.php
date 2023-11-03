<?php

namespace App\Services\Admin;

use App\Models\City;
use App\Models\Transport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\RedirectResponse;
use App\Http\Requests\Admin\City\Request as CityRequest;

class AdminService
{
    public function index()
    {
        $transport = Transport::all();
        $cities = City::all();
        return view('admin.transport.index', compact('transport', 'cities'));
    }

    public function post(Request $request)
    {
        $data = $request->validated();
        Transport::create($data);
    }

    public function update(Request $request, Transport $item)
    {
        $data = $request->validated();
        $item->update($data);
    }

    public function add(CityRequest $request): RedirectResponse
    {
        $data = $request->validated();
        City::create([
            'name' => $data['name']
        ]);
        return redirect()->route('admin.city.index');
    }

    public function delete()
    {
        Transport::where('city_id', $item->id)->delete();
        $item->delete();
        return redirect()->route('admin.city.index');
    }
}
