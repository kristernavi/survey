<?php

namespace App\Http\Middleware;

use Closure;

class IsSurverior
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
            return redirect(route('surverior.login.index'));
        } elseif (\Auth::user()->type != 'surverior') {
            # code...
            return redirect(route('admin.index'));
        }
        return $next($request);
    }
}
