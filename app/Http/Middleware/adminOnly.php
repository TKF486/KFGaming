<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;


class adminOnly
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->hasSession()) {
            $data = User::where('email', $request['email'])->first();
            error_log('can fetch data in data.');
            if ($data != null) {
                $isAdmin = $data['role'] == 'admin';
                error_log('admin is'.$isAdmin);
                if ($isAdmin) {
                    error_log('enter redirect');
                    return $next($request);
                }
            }
        }
        return redirect(RouteServiceProvider::HOME);
    }
}
