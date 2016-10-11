<?php

namespace App\Http\Middleware;

use Closure;

class Cors {
    public function handle($request, Closure $next){
        return $next($request)
           ->header('Access-Control-Allow-Origin', 'http://localhost:3000') // maybe put this into the .env file so you can change the URL in production.
           ->header('Access-Control-Allow-Methods', 'POST, DELETE, GET, OPTIONS') // or specify `'GET, POST, PUT, DELETE'` etc as the second parameter if you want to restrict the methods that are allowed.
           ->header('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, Authorization'); // or add your headers.
	}
}
