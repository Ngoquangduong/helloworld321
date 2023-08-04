<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if($request->path()=="login" && $request->session()->has('user'))
        {
            return redirect('/');
        }
        if($request->path()=="login" && $request->session()->has('admin'))
        {
            return redirect('/admin');
        }
        return $next($request);
    }
}
