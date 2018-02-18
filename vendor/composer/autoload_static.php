<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite090cb6e4de370d555e02c56d8ba9e78
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Core\\' => 5,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite090cb6e4de370d555e02c56d8ba9e78::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite090cb6e4de370d555e02c56d8ba9e78::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
