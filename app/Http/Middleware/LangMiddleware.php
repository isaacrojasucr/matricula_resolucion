<?php

namespace App\Http\Middleware;

use Closure,Session, Auth;

class LangMiddleware
{


    protected $languages = ['en','es'];

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        

        return $next($request);
    }
}
