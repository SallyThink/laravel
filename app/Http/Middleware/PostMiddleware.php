<?php

namespace App\Http\Middleware;

use Closure;

class PostMiddleware
{

    public function handle($request, Closure $next)
    {
        if($request->input('comment')=='aaaaa')
        {
            return redirect('home');
        }
        return $next($request);
    }
}
