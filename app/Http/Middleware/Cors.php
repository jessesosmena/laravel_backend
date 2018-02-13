<?php

namespace App\Http\Middleware;

use Closure;

class Cors
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
         $domains = ['http://localhost:3000', 'http://localhost:8080'];

        if(isset($request->server()['HTTP_ORIGIN'])) { // if we find the request has a server HTTP_ORIGIN or if it is set
            $origin = $request->server()['HTTP_ORIGIN']; // take the origin

            if(in_array($origin, $domains)){ // check if $origin is inside the $domains allow access
                header('Access-Control-Allow-Origin: ' . $origin);
                header('Access-Control-Allow-Headers:, Origin, Content-Type, Authorization');
            }
        }
        return $next($request);
    }
}
