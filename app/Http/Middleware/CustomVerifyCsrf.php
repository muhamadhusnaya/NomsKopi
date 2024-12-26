<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\Middleware;
use Symfony\Component\HttpFoundation\Response;

class CustomVerifyCsrf extends Middleware
{
    /**
     * Handle an incoming request.
     *
     * 
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    protected $except = [
        '/create-invoice', // Tambahkan rute yang ingin dikecualikan
    ];
    
    public function handle(Request $request, Closure $next): Response
    {
        return $next($request);
    }

}
