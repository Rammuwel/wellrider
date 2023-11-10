<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckUserRole
{
    public function handle($request, Closure $next, ...$roles)
    {
        $guards = array_keys(config('auth.guards')); // Get all defined guards

        foreach ($guards as $guard) {
            $authGuard = Auth::guard($guard);

            if ($authGuard->check() && in_array($guard, $roles)) {
                return $next($request);
            }
        }

        return redirect('/login'); // Redirect to login if user does not have required role in any guard
    }
}
