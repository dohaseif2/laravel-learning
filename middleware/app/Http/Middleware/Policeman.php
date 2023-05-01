<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Policeman
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $role=$request->route('role');
        if($role=="admin"){
            return redirect()->route('admin');
        }elseif ($role=="user"){
            return redirect()->route('user');
        }



        return $next($request);
    }
}
