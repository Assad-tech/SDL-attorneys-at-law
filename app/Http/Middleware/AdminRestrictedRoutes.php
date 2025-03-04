<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminRestrictedRoutes
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // $prefix = $request->route()->getPrefix();
        $user = Auth::user();

        // // Ensure user is authenticated
        // if (!$user || !$user->role) {
        //     abort(401, 'Unauthorized access.');
        // }

        // $roleName = $user->role->name;

        // dd($prefix);
        // Check if the prefix matches the user's role
        // if ($user && $roleName === 'Admin') {
        if ($user && $user->role_id === 1) {
            return redirect()->route('admin.dashboard')->with('error', 'Unauthorized access.');
        }
        return $next($request);
    }
}


