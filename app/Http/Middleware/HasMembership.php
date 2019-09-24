<?php

namespace App\Http\Middleware;

use Closure;

class HasMembership
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
        if ($request->user() && !(
            $request->user()->subscribed('student') ||
            $request->user()->subscribed('professional') ||
            $request->user()->subscribed('institutional') )) {
            return redirect('membership');
        }

        return $next($request);
    }
}
