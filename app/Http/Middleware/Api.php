<?php

namespace App\Http\Middleware;

use Closure;

class Api {
    public function handle($request, Closure $next){
       if (in_array($request->method(), ['POST', 'PUT', 'PATCH'])) {
            $data = $request->json()->all();
            $request->request->replace(is_array($data) ? $data : []);
        }
        $response = $next($request);

        return $response;
    }
}