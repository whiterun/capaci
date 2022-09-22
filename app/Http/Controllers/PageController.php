<?php

namespace App\Http\Controllers;

use App\Models\Video;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(Request $request)
    {
        $videos = Video::query()->limit(6)->get();

        return view('home', compact('videos'));
    }
}
