<?php

namespace App\Services\Admin;

use App\Models\Transport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminService
{
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
}
