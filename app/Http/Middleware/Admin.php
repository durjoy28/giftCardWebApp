<?php

namespace App\Http\Middleware;

use Closure;

class Admin
{
    protected $auth;
    
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    public function handle($request, Closure $next)
    {
        if ($this->auth->guest()) {
            if ($request->ajax()) {
                return response('Unauthorized.', 401);
            } else {
                return redirect()->guest('user/login');
            }
        }
        else{
            if($this->auth->user()->role==='admin'){

                return $next($request);
            }
            else{

                return redirect()->guest('/');
            }
        }
    }
}
