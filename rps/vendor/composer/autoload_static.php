<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfd3714b3fdc4823a47180069e34177fe
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitfd3714b3fdc4823a47180069e34177fe::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfd3714b3fdc4823a47180069e34177fe::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfd3714b3fdc4823a47180069e34177fe::$classMap;

        }, null, ClassLoader::class);
    }
}
