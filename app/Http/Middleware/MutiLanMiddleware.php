<?php

namespace App\Http\Middleware;

use App\Model\Language;
use Closure;

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



        $inputlan = $request->input('lan');
        $defaultLan = app()->config->get('app.locale');

        if(is_null($inputlan))
        {
            $sessionApplocale = app()->session->get('applocale');
            if(is_null($sessionApplocale))
            {
                app()->session->set('applocale',$defaultLan);
                app()->setLocale($defaultLan);
            }else
            {
                app()->setLocale($sessionApplocale);
            }

        }else
        {
            $supportLan = app()->supportLanguage;

            $isExist = false;
            foreach ($supportLan as $language)
            {
               if($inputlan === $language->code)
               {
                    $isExist = true;
                    break;
               }
            }

            if($isExist)
            {
                $defaultLan = $inputlan;
            }

            app()->session->set('applocale',$defaultLan);
            app()->setLocale($defaultLan);

        }

        view()->share('curLan',Language::current());
        view()->share('otherLan',Language::other());

        return $next($request);
    }

}
