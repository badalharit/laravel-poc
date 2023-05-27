<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\User;

class UserLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $username = $request->input('username');
        $passwword = md5($request->input('password'));
        $response = User::authenticateUser($username,$passwword);

        if(count($response)){
            $request->session()->put('name',$response['name']);
            $request->session()->put('email',$response['email']);
            $request->session()->put('username',$username);
        }

        return $next($request);
    }
}
