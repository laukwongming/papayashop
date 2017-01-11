<?php

namespace App\Http\Middleware;

use Closure;
use Config;
use App;

class MutiLanMiddleware
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
        $locale = Config::get('app.locale');
        $supportLan = array_keys(Config::get('app.language_support'));
        $inputlan = $request->input('lan',$locale);
        if(in_array($inputlan,$supportLan))
        {
           $locale = $inputlan;
        }

        App::setLocale($locale);

        return $next($request);
    }
}
