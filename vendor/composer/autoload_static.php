<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit969e616af957c063bb15b03339115ff1
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Phpml\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Phpml\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-ai/php-ml/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit969e616af957c063bb15b03339115ff1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit969e616af957c063bb15b03339115ff1::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit969e616af957c063bb15b03339115ff1::$classMap;

        }, null, ClassLoader::class);
    }
}