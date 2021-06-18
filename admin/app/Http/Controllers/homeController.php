<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    function HomeIndex() {
        return view('home');
    }
}
