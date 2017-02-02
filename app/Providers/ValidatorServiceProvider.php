<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ValidatorServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {

        $appValidator = $this->app['validator'];

        $appValidator->extend('exists_or_null', function ($attribute, $value, $parameters) use($appValidator)
        {
            if($value == 0 || is_null($value))
            {
                return true;
            } else
            {
                $validator = $appValidator->make([$attribute => $value], [
                    $attribute => 'exists:' . implode(",", $parameters)
                ]);

                return !$validator->fails();
            }
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {

    }
}
