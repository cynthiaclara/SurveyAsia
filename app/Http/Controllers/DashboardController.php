<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('researcher.dashboard');
    }

    public function pricing()
    {
        return view('researcher.pricing');
    }

    public function payment()
    {
        return view('researcher.payment');
    }

    public function createSurvey()
    {
        return view('researcher.create-survey');
    }

    public function dataRespondent()
    {
        return view('researcher.data-respondent');
    }
}
