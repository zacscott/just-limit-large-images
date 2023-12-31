<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8e43bd3c9e156060bc64c1d9adf4751f
{
    public static $prefixLengthsPsr4 = array (
        'J' => 
        array (
            'JustLimitLargeImages\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'JustLimitLargeImages\\' => 
        array (
            0 => __DIR__ . '/../..' . '/source',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8e43bd3c9e156060bc64c1d9adf4751f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8e43bd3c9e156060bc64c1d9adf4751f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8e43bd3c9e156060bc64c1d9adf4751f::$classMap;

        }, null, ClassLoader::class);
    }
}
