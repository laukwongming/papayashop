<?php

namespace App\Helper;

use App;
use App\Model\Language;
use Config;
use Session;

class LanguageHelper
{
    /**
     * Set Locale
     * @param string $inputlan
     */
    public static function setLocale($inputlan)
    {
        $locale = Config::get('app.locale');
        $supportLan = Language::all();
        foreach ($supportLan as $language)
        {
           if($inputlan === $language->code)
           {
                $locale = $inputlan;
                break;
           }
        }
        Session::put('lanCode',$)
        app()->session->put('lanId','111');

        App::setLocale($locale);
    }

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
