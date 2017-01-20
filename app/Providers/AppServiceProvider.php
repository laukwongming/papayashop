<?php

namespace App\Providers;

use App\Model\Language;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if(count(app()->supportLanguage)<=0)
        {
            abort(403,'None of support Language');
        }

        view()->share('supportLanguage', $this->app->supportLanguage);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        app()->singleton('supportLanguage', function () {
            return Language::all();
        });

    }
}
