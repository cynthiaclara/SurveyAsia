<?php

namespace App\Http\Controllers\Admin;

use App\Actions\Admin\AttemptLoginAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdminLoginRequest;
use App\Models\News;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function attemptLogin(AdminLoginRequest $request, AttemptLoginAction $action)
    {
        # code...
        return $action->execute($request);
    }
}
