<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ToDoOps
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next){
        $apiToken = $request->input('api_token');
        $validToken = decrypt($apiToken) === config('app.api_token');

        if (!$validToken) {
            return response()->json(['error' => 'Unauthorized Access!'], 401);
        }
        return $next($request);
    }

}
