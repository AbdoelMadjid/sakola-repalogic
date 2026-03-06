<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Response;

class LastActivityAt
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

            // Cek Inaktivitas (Auto Logout jika tidak aktif > 20 menit)
            if ($user->last_activity_at && $user->last_activity_at->lt(now()->subMinutes(20))) {
                Auth::logout();
                $request->session()->invalidate();
                $request->session()->regenerateToken();

                if ($request->ajax()) {
                    return response()->json(['message' => 'Sesi Anda telah berakhir karena tidak ada aktivitas.'], 401);
                }

                return redirect()->route('login')->with('error', 'Sesi Anda telah berakhir karena tidak ada aktivitas.');
            }

            // update jika lebih dari 1 menit
            if (!$user->last_activity_at || $user->last_activity_at->lt(now()->subMinute())) {
                DB::table('users')
                    ->where('id', $user->id)
                    ->update(['last_activity_at' => now()]);
            }
        }

        return $next($request);
    }
}
