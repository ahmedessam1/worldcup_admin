<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class LocaleMiddleware
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
        if($request->session()->has('locale')) {
            if($request->session()->get('locale') === 'en') {
                app()->setLocale('en');
            } else {
                app()->setLocale('ar');
            }
        } else {
            $request->session()->put('locale', 'en');
        }
        return $next($request);
    }
}
