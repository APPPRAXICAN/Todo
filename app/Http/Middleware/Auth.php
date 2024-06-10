<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Auth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // dd($request);
        // if($request->_token !== session()->get('_token')){
        if ($request->Email !== 'admin@ex.com') {
            
            // return redirect()->route('auth.login');
        }
        return $next($request);
    }
}
