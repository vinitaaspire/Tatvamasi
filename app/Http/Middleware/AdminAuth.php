<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle($request, Closure $next)
    {
        // Check if the user is authenticated through the 'admin' guard
        if (Auth::guard('admin')->check()) {
            // User is an admin, proceed with the request
            return $next($request);
        }

        // User is not an admin, you might want to redirect or return an error response
        return redirect()->route('admin')->with('error', 'Unauthorized. Admin access required.');
    }
}
