<?php

namespace App\Http\Middleware;

use Closure;

class IfEleven
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
//        if (date('d') == 11) {
            return $next($request);
//        }
//        abort(403, 'Not today');
    }
}
