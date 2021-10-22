<?php

namespace App\Http\Middleware;

use App\Models\Role;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleRedirect
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $user = Auth::user();

        if ($user->role_id == Role::IS_ADMIN) {
            return route('admin_dashboard');
        } elseif ($user->role_id == Role::IS_RESEARCHER) {
            return route('researcher');
        } elseif ($user->role_id == Role::IS_RESPONDENT) {
            return route('respondent');
        } else {
            return route('/');
        }


        return $next($request);
    }
}
