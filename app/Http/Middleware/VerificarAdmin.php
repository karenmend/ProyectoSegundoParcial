<?php

namespace App\Http\Middleware;

use Closure;

class VerificarAdmin
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
        if($request->user()->id_tipos_usuario != 0){
            return redirect('/admin');
        }
       
        return $next($request);
    }
}
