<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Announcement
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        echo "this is just a model, not a real site ";
        return $next($request);
    }
}
