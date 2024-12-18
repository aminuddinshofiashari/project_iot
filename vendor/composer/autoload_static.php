<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit07fa959221409d7a7f83f86ca896343e
{
    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'Bluerhinos\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Bluerhinos\\' => 
        array (
            0 => __DIR__ . '/..' . '/bluerhinos/phpmqtt',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit07fa959221409d7a7f83f86ca896343e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit07fa959221409d7a7f83f86ca896343e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit07fa959221409d7a7f83f86ca896343e::$classMap;

        }, null, ClassLoader::class);
    }
}