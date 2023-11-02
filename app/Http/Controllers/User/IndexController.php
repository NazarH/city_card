<?php

namespace App\Http\Controllers\User;

use App\Models\CardHistory;
use App\Models\TripHistory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function index()
    {
        $trip = TripHistory::where('user_id', Auth::user()->id)->get();
        $card_history = CardHistory::where('user_id', Auth::user()->id)->get();
        return view('user.index', compact('trip', 'card_history'));
    }
}
