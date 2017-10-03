<?php

namespace App\Http\Middleware;

use Closure;

class IsAdmin
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
        if (!\Auth::check()) {
            return redirect(route('admin.login'));
        } elseif (\Auth::user()->type != 'admin') {
            # code...
            return redirect(route('surverior.index'));
        }
        return $next($request);
    }
}
