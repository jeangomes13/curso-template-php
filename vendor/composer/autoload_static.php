<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7c2889fbb169e0d2b22a0a2d4fecd88c
{
    public static $files = array (
        'd3032820a7f17c293730fcd9ad22902d' => __DIR__ . '/../..' . '/app/framework/helpers/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit7c2889fbb169e0d2b22a0a2d4fecd88c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7c2889fbb169e0d2b22a0a2d4fecd88c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7c2889fbb169e0d2b22a0a2d4fecd88c::$classMap;

        }, null, ClassLoader::class);
    }
}
