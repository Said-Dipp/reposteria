<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\http\JsonResponse;


class Mobil
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
        if ($request->input('token')=="mi_aplicacion_said123") {
            return $next($request);
        }
        else {
            return new JsonResponse([
                'status'=>false,
                'messeege'=>'acceso restringido',
                'code'=>403,
            ], 403);
        }
    }
}