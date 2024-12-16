<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckModerator
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check() && Auth::user()?->role === 'moderator') {
            return $next($request);
        }
        return redirect('/')->with('error', 'Доступ запрещен.');
    }
}

