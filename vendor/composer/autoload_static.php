<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita0ec3b0f53aa230298303cfc9b9e3e5a
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
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita0ec3b0f53aa230298303cfc9b9e3e5a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita0ec3b0f53aa230298303cfc9b9e3e5a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita0ec3b0f53aa230298303cfc9b9e3e5a::$classMap;

        }, null, ClassLoader::class);
    }
}
