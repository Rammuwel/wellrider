<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class PreventLoggedInUsers
{
    public function handle($request, Closure $next)
    {
        if (Auth::guard('user')->check() || Auth::guard('owner')->check() || Auth::guard('admin')->check()) {
            return redirect('/'); // Redirect logged-in users to the dashboard or another route of your choice
        }

        return $next($request);
    }
}
