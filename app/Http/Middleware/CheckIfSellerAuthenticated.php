<?php

namespace App\Http\Middleware;

use Closure;

class CheckIfSellerAuthenticated
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
        $auth=Auth::guard('sellers');
        if (!$auth->check()) {
            return redirect('/');
        }

        return $next($request);
    }
}
