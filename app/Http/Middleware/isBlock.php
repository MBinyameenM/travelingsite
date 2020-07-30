<?php

namespace App\Http\Middleware;

use Closure;

class isBlock
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
         if (auth()->check() && !auth()->user()->status ) 
         {
            auth()->logout();

                $message = 'Your account has been blocker.Please contact administrator.';

                return redirect()->route('login')->withMessage($message);
            }

        return $next($request);
    }
}
