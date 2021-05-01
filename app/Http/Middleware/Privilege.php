<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Privilege
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $roleTagname)
    {
        return $next($request);
    }
}
