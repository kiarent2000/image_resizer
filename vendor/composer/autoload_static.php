<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5de3ddeca2ff31c9d65fc66aa5b164bd
{
    public static $prefixLengthsPsr4 = array (
        'G' => 
        array (
            'Gumlet\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Gumlet\\' => 
        array (
            0 => __DIR__ . '/..' . '/gumlet/php-image-resize/lib',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5de3ddeca2ff31c9d65fc66aa5b164bd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5de3ddeca2ff31c9d65fc66aa5b164bd::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5de3ddeca2ff31c9d65fc66aa5b164bd::$classMap;

        }, null, ClassLoader::class);
    }
}
