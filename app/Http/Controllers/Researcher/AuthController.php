<?php

namespace App\Http\Controllers\Researcher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    //

    /**
     * Show login form
     */
    public function loginForm()
    {
        # code...
        return view('researcher.auth.login');
    }
}
