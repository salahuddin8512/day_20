<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit82666280baee69474c04e7150cb10b2a
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit82666280baee69474c04e7150cb10b2a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit82666280baee69474c04e7150cb10b2a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit82666280baee69474c04e7150cb10b2a::$classMap;

        }, null, ClassLoader::class);
    }
}
