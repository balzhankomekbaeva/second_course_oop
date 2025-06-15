<?php

namespace lesson11\App;

class AppVersion
{
    private static $version = '1.0.0';

    public static function getVersion(){
        return self::$version;
    }

    public static function updateVersion($newVersion){
        self::$version = $newVersion;
    }
}