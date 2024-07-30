<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite59944f658cf726e1fe584981171ddbc
{
    public static $prefixLengthsPsr4 = array (
        'e' => 
        array (
            'eftec\\bladeone\\' => 15,
        ),
        'P' => 
        array (
            'Phroute\\Phroute\\' => 16,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'eftec\\bladeone\\' => 
        array (
            0 => __DIR__ . '/..' . '/eftec/bladeone/lib',
        ),
        'Phroute\\Phroute\\' => 
        array (
            0 => __DIR__ . '/..' . '/phroute/phroute/src/Phroute',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite59944f658cf726e1fe584981171ddbc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite59944f658cf726e1fe584981171ddbc::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite59944f658cf726e1fe584981171ddbc::$classMap;

        }, null, ClassLoader::class);
    }
}
