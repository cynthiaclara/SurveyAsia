<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

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

        //$role = User::with('role')->get()->first();
        $userToTest = User::find(15);

        $canManageUser = Gate::allows('manageAll');

        $data = [
            [
                'context' => 'Current subscription ?',
                'result' => Auth::user()->subscription_id == null ? 'No subscription' : Auth::user()->subscription_id
            ],
            [
                'context' => 'Can manage other users ?',
                'result' => $canManageUser ? 'Yes' : 'No'
            ],
            [
                'context' => 'Can manage all survey ?',
                'result' => 'test available soon'
            ],
            [
                'context' => 'Can manage it\'s own survey ?',
                'result' => 'test available soon'
            ],
            [
                'context' => 'Can answer survey questions ?',
                'result' => 'test available soon'
            ],
        ];

        $result = [
            'results' => $data
        ];

        return view('tests', $result);
    }

    public function profile()
    {
        # code...
        return view('profile');
    }
}
