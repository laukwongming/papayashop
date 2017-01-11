<?php

namespace App\Helper;

use App;
use Config;

class LanguageHelper
{
    public static function currentCode()
    {
        return App::getLocale();
    }

    /**
     * Get all support language from config file
     */

    public static function currentName()
    {
        return Config::get('app.language_support')[self::currentCode()];
    }

    /**
     * Get all support language from config file
     * without current language
     */

    public static function allWithoutCurrent()
    {
        $lan = Config::get('app.language_support');
        $currentCode = self::currentCode();
        foreach ($lan as $key) {
            unset($lan[$currentCode]);
        }
        return $lan;
    }
}
