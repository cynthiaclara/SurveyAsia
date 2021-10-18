<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function playground()
    {
        # code...
        $curr_user = Auth::user();
        $user = User::where(['id' => $curr_user->id])->get()->first();
        //$role = User::with('role')->get()->first();

        return view('tests', ['user' => $user]);
    }

    public function profile()
    {
        # code...
        return view('profile');
    }
}
