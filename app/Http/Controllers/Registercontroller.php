<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password as RulesPassword;
use Illuminate\Support\Facades\Hash;

class Registercontroller extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'first_name' => ['required', 'regex:/^[\p{L}\s-]+$/u', 'max:255'],
            'last_name' => ['required', 'regex:/^[\p{L}\s-]+$/u', 'max:255'],
            'username' => ['required', 'min:4', 'unique:users'],
            'email' => ['required', 'email:dns', 'unique:users'],
            'password' => ['required', RulesPassword::min(8)]
            // 'checkbox' => ['required']
        ], [
            'first_name.required' => 'The first name field is required.',
            'last_name.required' => 'The last name field is required.',
            'first_name.regex' => 'The first name format is invalid.',
            'last_name.regex' => 'The last name format is invalid.',
            // 'checkbox.required' => 'wajib diisi'
        ]);

        $validated['password'] = Hash::make($validated['password']);

        User::create($validated);

        $request->session()->flash('success', 'Registration Success!');

        return redirect('/login');
    }
}
