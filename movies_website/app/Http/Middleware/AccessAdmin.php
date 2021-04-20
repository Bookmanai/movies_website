<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AccessAdmin
{

    public function handle(Request $request, Closure $next)
    {
        if (Auth::user()->hasAnyRole('movie_admin')) {
            return $next($request);
        }

        if (Auth::user()->hasAnyRole('show_admin')) {
            return $next($request);
        }

        if (Auth::user()->hasAnyRole('actor_admin')) {
            return $next($request);
        }

        if (Auth::user()->hasAnyRole('producer_admin')) {
            return $next($request);
        }

        if (Auth::user()->hasAnyRole('user_admin')) {
            return $next($request);
        }

        if (Auth::user()->hasAnyRole('user')) {
            return $next($request);
        }

        return redirect('login');
    }
}
