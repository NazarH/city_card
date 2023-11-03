<?php

namespace App\Services\User;

use App\Models\Card;

use App\Models\CardHistory;
use App\Models\TripHistory;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class UserService
{
    public function index(): View
    {
        $trip = TripHistory::where('user_id', Auth::user()->id)->get();
        $card_history = CardHistory::where('user_id', Auth::user()->id)->get();
        return view('user.index', compact('trip', 'card_history'));
    }

    public function add(Request $request): RedirectResponse
    {
        $data = $request->validated();
        Card::create([
            'user_id' => Auth::user()->id,
            'number' => $data['number']
        ]);
        return redirect()->route('user.index');
    }
}
