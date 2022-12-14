<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd10617446517955f8ab4f5c8f2f46c24
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'RPS\\' => 4,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'RPS\\' => 
        array (
            0 => __DIR__ . '/..' . '/susanbuck/rock-paper-scissors/src',
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitd10617446517955f8ab4f5c8f2f46c24::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd10617446517955f8ab4f5c8f2f46c24::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd10617446517955f8ab4f5c8f2f46c24::$classMap;

        }, null, ClassLoader::class);
    }
}
