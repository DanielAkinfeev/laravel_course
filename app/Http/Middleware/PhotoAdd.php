<?php

namespace App\Http\Middleware;

use App\Place;
use Closure;

class PhotoAdd
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
        $places = Place::all();
        if ($places->count() == 0) {
            return redirect()->route('places');
        }
        return $next($request);
    }
}
