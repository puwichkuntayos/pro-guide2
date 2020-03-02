<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Access\AuthorizationException;

use Closure;

class CheckGuideTl
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
        // dd($request);
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


           if( Auth::user()->role_id != 3) {
            Auth::logout();
            return redirect('/login')->withErrors([
                'password' => 'ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง',
            ]);
            }
            else{
                 return $next($request);
            }
       
        throw new AuthorizationException('You do not have permission to view this page');
        // return response("Insufficient permissions", 401);
        
    }
}
