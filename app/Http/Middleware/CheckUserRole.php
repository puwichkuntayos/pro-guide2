<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Support\Facades\Auth;

class CheckUserRole
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

        $actions = $request->route()->getAction();
        $roles = isset($actions['roles']) ? $actions['roles'] : null;

        if( is_null($roles) ){
            Auth::logout();
            return redirect('/login')->withErrors([
                'password' => 'ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง',
            ]);
        }

        if( $request->user()->hasRole('Client') ){
            Auth::logout();
            return redirect('/login')->withErrors([
                'password' => 'ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง',
            ]);
        }

        if ( $request->user()->hasRole($roles) ){
            return $next($request);
        }

        throw new AuthorizationException('You do not have permission to view this page');
        // return response("Insufficient permissions", 401);
    }
}
