<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Access\AuthorizationException;

class CheckAccounting
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,...$roles)
    {
        $user = $request->user();

        if( is_null($user) ){
            throw new AuthorizationException('You do not have permission to view this page');
        }

        if( $user->new_password==1 ){
            return redirect('/new_password');
        }

        if( Auth::user()->status!=1 ){
            Auth::logout();
            return redirect('/login')->withErrors([
                'password' => 'ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง',
            ]);
        }

        if ($request->user() === null) {

            Auth::logout();
            return redirect('/login')->withErrors([
                'password' => 'ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง',
            ]);

            // return response("Insufficient permissions", 401);
        }

        if(Auth::check() && Auth::user()->role_id == $roles[0]) {
            return $next($request);
        }else{
            Auth::logout();
            return redirect('/login');
        }
    }
}
