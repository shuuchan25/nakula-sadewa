<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class HSTS
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);

        if (!App::environment('local')) {
            $response->headers->set(
                'Strict-Transport-Security',
                'max-age=31536000; includeSubdomains',
                true
            );
        }

        return $response;
    }
}
