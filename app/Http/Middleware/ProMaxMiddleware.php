<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class ProMaxMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {


        $prefix = $request->route()->getPrefix();
        $user = Auth::user();
        
        // Ensure user is authenticated
        if (!$user || !$user->role) {
            abort(401, 'Unauthorized access.');
        }
        
        $roleName = $user->role->name;
        
        // dd($roleName);
        // Check if the prefix matches the user's role
        if (($roleName === 'Admin' && $prefix === '/admin') ||
            ($roleName === 'User' && $prefix === '/user')
        ) {
            return $next($request);
        }

        // Unauthorized access
        return redirect()->back();
        // abort(401, 'Unauthorized access.');
    }
}
