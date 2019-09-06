<?php

namespace App\Http\Middleware;

use Closure;

class Logged
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
        if(!empty(session('id'))){
            return $next($request);
        } else {
            abort(403,'Anda Tidak Memiliki Hak Akses untuk Ke Halaman Ini');
        }
    }
}
