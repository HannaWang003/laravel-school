<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    function pb(Request $request)
    {
        $ver = $request->input('version');
        return view('page.index', ['version' => $ver]);
    }
}
