<?php

namespace App\Http\Middleware;

use Closure;

class SimpleAuth
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
        //セッションの値を確認する
        if (false == session("user")) {
            return redirect("/login");
        }

        return $next($request);
    }
}
