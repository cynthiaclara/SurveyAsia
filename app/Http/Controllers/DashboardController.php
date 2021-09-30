<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('researcher.dashboard');
        return view('researcher.pricing');
        return view('researcher.payment');
    }
}
