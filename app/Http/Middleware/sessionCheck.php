<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class sessionCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

        if(!session()->has('sessionUser') && ($request->path() !='login')){
            return redirect('login')->with('fail','You must be logged in');
        }

        if(session()->has('sessionUser') && ($request->path() == 'login') ){
            return redirect('admin');
        }


        return $next($request);
    }
}
