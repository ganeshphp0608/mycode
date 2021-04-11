<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class loginmiddleware
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
        if($request->path()=='/' && $request->session()->has('user'))
        {
            return redirect('/homepage');
        }
        return $next($request);
       
    }
}
