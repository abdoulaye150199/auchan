<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite55fa3fd9f5eea23b7f65fd3440d8f02
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Src\\repository\\' => 15,
            'Src\\entite\\' => 11,
            'Src\\controller\\' => 15,
            'Src\\Services\\' => 13,
            'Src\\Config\\' => 11,
        ),
        'J' => 
        array (
            'Jour\\Composer\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Src\\repository\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/repository',
        ),
        'Src\\entite\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/entite',
        ),
        'Src\\controller\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/controller',
        ),
        'Src\\Services\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/services',
        ),
        'Src\\Config\\' => 
        array (
            0 => __DIR__ . '/../..' . '/config/core',
        ),
        'Jour\\Composer\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInite55fa3fd9f5eea23b7f65fd3440d8f02::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite55fa3fd9f5eea23b7f65fd3440d8f02::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite55fa3fd9f5eea23b7f65fd3440d8f02::$classMap;

        }, null, ClassLoader::class);
    }
}
