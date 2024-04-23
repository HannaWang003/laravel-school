<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    function pb()
    {
        $ver = $_GET['version'];
        return view('page.index', ['version' => $ver]);
    }
}
