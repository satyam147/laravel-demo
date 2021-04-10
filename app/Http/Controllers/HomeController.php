<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    public function home()
    {
        return view('demo');
    }

    public function demo(Request $request)
    {
        $request->validate([
            'name' => ['required']
        ]);
        Log::info(now());
        return response()->json([
            'name' => $request->name,
        ]);
    }

    public function par($key = null)
    {
        return view('demo', compact('key'));
    }

}
