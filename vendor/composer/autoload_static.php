<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit39d929fc089bd0ec25e43a26fe5e96ba
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit39d929fc089bd0ec25e43a26fe5e96ba::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit39d929fc089bd0ec25e43a26fe5e96ba::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit39d929fc089bd0ec25e43a26fe5e96ba::$classMap;

        }, null, ClassLoader::class);
    }
}