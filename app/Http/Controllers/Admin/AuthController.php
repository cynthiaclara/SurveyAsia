<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Action\AttemptLoginAction;
use App\Http\Controllers\Admin\Action\AttemptRegisterAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdminLoginRequest;
use App\Http\Requests\AdminRegisterRequest;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Attempt login
     * @param App\Http\Requests\AdminLoginRequest $request
     */
    public function attemptLogin(
        AdminLoginRequest $request
    ) {
        # code...

        $user = User::where(['username' => $request->login])
            ->orWhere(['email' => $request->login])
            ->get()->first();

        //dd($user);

        if (empty($user)) {
            return back()->withErrors(['login' => 'user not found']);
        }

        if (
            !empty($user) && $user->role_id != Role::IS_ADMIN
        ) {
            return back()->withErrors(['errors' => 'Unauthorized']);
        }


        if (!Auth::attempt(['email' => $user->email, 'password' => $request->password])) {
            return back()->withErrors(['password' => 'Invalid password']);
        }

        $request->session()->regenerate();
        return redirect()->to('admin');

        // Not work in hosting
        // $action = new AttemptLoginAction();
        // return $action->execute($request);
    }

    /**
     * This feature will be disabled
     */
    public function attemptRegister(
        AdminRegisterRequest $request,
        AttemptRegisterAction $action
    ) {
        # code...
        return $action->execute($request);
    }
}
