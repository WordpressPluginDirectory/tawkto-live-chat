<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3bfd65b9f9217ea892e2845de267d6f5
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Tawk\\Tests\\' => 11,
            'Tawk\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Tawk\\Tests\\' => 
        array (
            0 => __DIR__ . '/..' . '/tawk/url-utils/tests',
        ),
        'Tawk\\' => 
        array (
            0 => __DIR__ . '/..' . '/tawk/url-utils/lib',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3bfd65b9f9217ea892e2845de267d6f5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3bfd65b9f9217ea892e2845de267d6f5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3bfd65b9f9217ea892e2845de267d6f5::$classMap;

        }, null, ClassLoader::class);
    }
}
