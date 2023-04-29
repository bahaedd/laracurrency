<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit313e851176ba6765f32a71a1a84403e2
{
    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'Bahaedd\\Quickmetrics\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Bahaedd\\Quickmetrics\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit313e851176ba6765f32a71a1a84403e2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit313e851176ba6765f32a71a1a84403e2::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit313e851176ba6765f32a71a1a84403e2::$classMap;

        }, null, ClassLoader::class);
    }
}