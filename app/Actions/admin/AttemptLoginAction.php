<?php

namespace App\Actions\Admin;

use App\Http\Requests\AdminLoginRequest;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AttemptLoginAction
{
    public function execute(AdminLoginRequest $request)
    {
        # code...
        $user = User::where(['username' => $request->login])
            ->orWhere(['email' => $request->login])
            ->get()->first();

        //dd($user);

        if (empty($user)) {
            return back()->withErrors(['login' => 'user not found']);
        }

        if (!empty($user) && $user->role_id != Role::IS_ADMIN) {
            return back()->withErrors(['errors' => 'Unauthorized']);
        }


        if (!Auth::attempt(['email' => $user->email, 'password' => $request->password])) {
            return back()->withErrors(['password' => 'Invalid password']);
        }

        $request->session()->regenerate();
        return redirect()->to('admin');
    }
}
