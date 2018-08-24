<?php

namespace App\Http\Middleware;

use Closure;

class AdminSaja
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
        if($request->user()->role === 'karyawan')
            abort(503);
        return $next($request);
    }
}
