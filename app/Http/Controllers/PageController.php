<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    function index()
    {
        return view('guest.welcome');
    }

    function about()
    {
        return view('guest.about');
    }
}