<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Manager
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
        if(!Auth::check()) {
            return redirect()->route('login');
        }
        if(Auth::user()->role == 'manager') {
            return $next($request);
        }
        if(Auth::user()->role == 'patient') {
            return redirect()->route('patient');
        }
        if(Auth::user()->role == 'tester') {
            return redirect()->route('tester');
        }
        
    }
}