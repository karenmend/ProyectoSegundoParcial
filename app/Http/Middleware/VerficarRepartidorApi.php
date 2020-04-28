<?php

namespace App\Http\Middleware;

use Closure;

class VerficarRepartidorApi
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
        if($request->user()->id_tipos_usuario != 1 && $request->user()->id_tipos_usuario != 2)
        {
            return redirect()->route('api.solorepartidores');
        }
        return $next($request);
    }
}
