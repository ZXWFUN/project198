<?php

namespace App\Http\Middleware;

use Closure;

class Login
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
        //没有登录
        if(!session('user')){
            return redirect()->route('admin.login')->with('errors','请登录');
        }
//        登录成功
        return $next($request);
    }
}
