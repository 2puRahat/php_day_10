<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit145826f2cb43bf6400baf78fb73fca7a
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit145826f2cb43bf6400baf78fb73fca7a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit145826f2cb43bf6400baf78fb73fca7a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit145826f2cb43bf6400baf78fb73fca7a::$classMap;

        }, null, ClassLoader::class);
    }
}
