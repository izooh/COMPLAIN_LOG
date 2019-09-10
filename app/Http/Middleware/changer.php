<?php

namespace App\Http\Middleware;

use Closure;

class changer
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
    if (auth()->check()) {
        # code...
        if (auth()->user()->isAdmin()) {
            # code...
            return $next($request);
        }
        return redirect()->route('display');

    }
    return redirect()->route('login');

       
    }
}
