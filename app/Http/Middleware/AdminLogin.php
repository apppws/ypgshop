<?php

namespace App\Http\Middleware;

use Closure;

class AdminLogin
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
        //判断如果是登录或者是验证码就直接通过
        if($request->is('captcha/*') || $request->is('login/*')){
            return $next($request);
        }
        // 登录  has  相当于  where
        if(!$request->session()->has('id'))
            return redirect('/login');

        // 权限
        $id = session('id');
        // 如果是  后台页面 显示系统首页的就直接显示
        if($request->is('/admin/index') || $request->is('/admin/home')){
            return $next($request);
        }
        return $next($request);
    }
}
