<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;
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
//        Log::debug(print_r($response, true));

        // レクエストにマッチするルートのrouteNameを取得する
        $route = Route::getRoutes()->match($request);
        $route->getName();

//        $actionName = $request->route()->getActionName();
//        $actionName = str_replace('App\Http\Controllers', '', $actionName);


        if ($response->status() === 204) {
            Storage::disk('response')->put("{$route->getName()}.{$response->status()}.json", '{}');
        } elseif(empty($response->getContent())) {
            Storage::disk('response')->put("{$route->getName()}.{$response->status()}.json", '{}');
        } else {
            Storage::disk('response')->put("{$route->getName()}.{$response->status()}.json", $response->getContent());
        }

        return $response;
    }
}
