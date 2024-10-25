<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use SoDe\Extend\JSON;
use Symfony\Component\HttpFoundation\Response;

class LanguageMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        
        // Obtener el lenguaje de la URL
        $segments = $request->segments();
        $lang = $segments[0]; // El primer segmento es el lenguaje

        $route = resource_path("lang/{$request->lang}.json");
       
        if (file_exists($route)) {
            $lang = file_get_contents($route);
            
            $request->attributes->add(['selected' => $request->lang]);
            $request->attributes->add(['lang' => json_decode($lang, true)]);
            return $next($request);
        } else {
            return Redirect::to('/es');
            // return $next($request);
        }
    }
}
