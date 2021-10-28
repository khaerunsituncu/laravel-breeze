<?php

namespace App\Http\Controllers;

use App\Models\Status;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TimelineController extends Controller
{
    public function __invoke(Request $request)
    {
        $statuses = Auth::user()->timeline();
        return view('timeline', compact('statuses'));
    }
}
