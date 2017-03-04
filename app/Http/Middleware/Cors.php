<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Response;
 
class Cors {
  /**
  * Handle an incoming request.
  *
  * @param \Illuminate\Http\Request $request
  * @param \Closure $next
  * @return mixed
  */
  public function handle($request, Closure $next, $origin='*')
  {
    $response = $next($request);
    
    $response->headers->add([
      'Access-Control-Allow-Origin'  => $origin,
      'Access-Control-Allow-Methods' => 'POST, GET, OPTIONS, PUT, DELETE',
      'Access-Control-Allow-Headers' => 'Content-Type, Accept, Authorization, X-Requested-With'
    ]);
    return $response;
  }
}
