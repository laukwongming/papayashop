<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    protected   $table = 'language';

    public      $timestamps = false;

    /**
     * @return App\Model\Language
     */
    public static function current()
    {
        $supportLan = app()->supportLanguage;

        $locale = app()->getLocale();
        foreach ($supportLan as $lan)
        {
            if($locale == $lan->code)
            {
                return $lan;
            }
        }
    }

    /**
     * Return other language
     * @return array of App\Model\Language
     */
    public static function other()
    {
        $supportLan = app()->supportLanguage;
        $locale = app()->getLocale();
        $otherLan = array();
        foreach ($supportLan as $lan)
        {
            if($locale !== $lan->code)
            {
                $otherLan[] = $lan;
            }
        }

        return $otherLan;
    }
}
