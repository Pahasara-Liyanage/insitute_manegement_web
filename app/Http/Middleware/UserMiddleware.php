<?php


namespace App\Http\Middleware;
use  Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Auth;

class UserMiddleware
{
    public function handle(Request $request,Closure $next):Response
    {
        if(Auth::check())
        {
            if(Auth::user()->is_role == 2)
            {
                return $next($request);
            }

            else

            {
                Auth::logout();
                return request(url('/'));
            }

        }else
        {
            Auth::logout();
            return request(url('/'));
        }
    }

}

