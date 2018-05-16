<?php

namespace App\Http\Middleware;

use App\User;
use Closure;

class AdminLoginCheck
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
        $user = User::find(session('id'));
        if($user->permit==1)
            return $next($request);
        return redirect('/login');
    }
}
