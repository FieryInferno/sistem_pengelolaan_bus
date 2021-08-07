<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class login
{
  
  public function handle(Request $request, Closure $next)
  {
    if (!auth()->user()->username) {
      abort(404);
    }
    
    return $next($request);
  }
}
