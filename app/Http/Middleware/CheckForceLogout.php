<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckForceLogout
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        if (Auth::check()) {
            $user = Auth::user();

            if (
                $user->force_logout_at &&
                $user->last_login_at &&
                $user->last_login_at < $user->force_logout_at
            ) {
                Auth::logout();
                $request->session()->invalidate();
                $request->session()->regenerateToken();

                if ($request->ajax()) {
                    return response()->json(['message' => 'Sesi Anda telah diakhiri oleh sistem.'], 401);
                }

                return redirect()
                    ->route('login')
                    ->withErrors([
                        'session' => 'Sesi Anda telah diakhiri oleh sistem.'
                    ]);
            }
        }

        return $next($request);
    }
}
