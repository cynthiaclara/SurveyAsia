<?php

namespace App\Http\Controllers\Admin;

use App\Actions\Admin\AttemptLoginAction;
use App\Actions\Admin\AttemptRegisterAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdminLoginRequest;
use App\Http\Requests\AdminRegisterRequest;
use App\Models\News;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function attemptLogin(
        AdminLoginRequest $request,
        AttemptLoginAction $action
    ) {
        # code...
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
