<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;

class RecordResponse
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
        $response = $next($request);
        Log::debug(print_r($response, true));
        
        $statusCode = ($response->status() >= 200 && $response->status() < 300)? '' : '.'.$response->status();
        Storage::disk('response')->put("{$request->route()->getActionName()}{$statusCode}.json", $response->getContent());
        return $response;
    }
}
