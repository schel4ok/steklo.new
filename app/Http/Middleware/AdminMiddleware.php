<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{

    public function __construct(Auth $auth)
    {
        $this->auth = $auth;
    }


    public function handle($request, Closure $next)
    {
        if ($this->auth->check()) {
            if (! $this->auth->user()->isAdmin() ) {
                Auth::logout();
                return redirect()->guest('/');
            } 
        }

        return $next($request);
    }
}
