<?php

namespace App\Http\Controllers;

use Auth;

use App\Models\Video;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(Request $request)
    {
        $videos = Video::query()->limit(6)->get();

        return view('home', compact('videos'));
    }

    public function account(Request $request)
    {
        $user = Auth::user();
        $subscription = $user->subscriptions()->first();

        return view('account', compact('user', 'subscription'));
    }

    public function pricing(Request $request)
    {
        return view('pricing');
    }
}
