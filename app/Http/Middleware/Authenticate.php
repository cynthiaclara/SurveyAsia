<?php

namespace App\Http\Middleware;

use App\Models\Role;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Auth;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (!$request->expectsJson()) {
            return route('login');
        }

        if (Auth::check() && Auth::user() != null) {
            $redirect = Auth::user()->role_id == Role::IS_RESEARCHER ? 'researcher' : 'respondent';

            if (Auth::user()->role_id == Role::IS_ADMIN) {
                $redirect = '/';
            }

            return redirect($redirect);
        }
    }
}
