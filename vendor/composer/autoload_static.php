<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1ab5750c1eecd3dd2b732770b0b15996
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
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1ab5750c1eecd3dd2b732770b0b15996::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1ab5750c1eecd3dd2b732770b0b15996::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1ab5750c1eecd3dd2b732770b0b15996::$classMap;

        }, null, ClassLoader::class);
    }
}