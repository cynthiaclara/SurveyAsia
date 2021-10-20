<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Action\AttemptLoginAction;
use App\Http\Controllers\Admin\Action\AttemptRegisterAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdminLoginRequest;
use App\Http\Requests\AdminRegisterRequest;

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
        $action = new AttemptLoginAction();
        return $action->execute($request);
    }

    public function attemptRegister(
        AdminRegisterRequest $request,
        AttemptRegisterAction $action
    ) {
        # code...
        return $action->execute($request);
    }
}
