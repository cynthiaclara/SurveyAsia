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
        if (Auth::check() && Auth::user() != null) {
            if ($request->user()->role_id == Role::IS_RESEARCHER) {
                return redirect('researcher');
            } else if ($request->user()->role_id == Role::IS_RESPONDENT) {
                return redirect('respondent');
            }
        }
        return $next($request);
    }
}
