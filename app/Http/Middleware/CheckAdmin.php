<?php

namespace App\Http\Middleware;

use Closure;
use session;
class CheckAdmin
{
    public function handle($request, Closure $next)
    {
        if(!session('admin_loggedin'))
        {
            return redirect('admin');
        }
        return $next($request);
    }
}