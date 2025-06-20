<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite60ca897230bcad3b3d1ae472b65b412
{
    public static $prefixLengthsPsr4 = array (
        'l' => 
        array (
            'lesson11\\App\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'lesson11\\App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/lesson11/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite60ca897230bcad3b3d1ae472b65b412::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite60ca897230bcad3b3d1ae472b65b412::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite60ca897230bcad3b3d1ae472b65b412::$classMap;

        }, null, ClassLoader::class);
    }
}
