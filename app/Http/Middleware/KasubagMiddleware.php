<?php

namespace App\Http\Middleware;

use Closure;

class KasubagMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user = $request->user();

        if ($user) {
            if ($user->kasubag()) {
                return $next($request);            
            }
        }
        
        return abort(403);
    }
}