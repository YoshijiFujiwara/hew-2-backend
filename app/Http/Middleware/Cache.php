<?php

namespace App\Http\Middleware;

use Closure;

class Cache
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $response = $next($request);

        $statusCode = $response->status();
        $isValidResponse = $statusCode === 200 || $statusCode === 203;

        if ($isValidResponse) {
            $cacheControl = $request->header('Cache-Control', 'public,max-age=3');
            $response->header('Cache-Control', $cacheControl);
        }

        return $response;
    }
}
