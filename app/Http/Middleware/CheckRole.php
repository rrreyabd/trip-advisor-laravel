<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next, $user_role)
    {
        if (!auth()->check() || auth()->user()->user_role !== $user_role) {
            abort(403); // Atau arahkan pengguna ke halaman lain jika perlu
        }
    
        return $next($request);
    }
    
}
