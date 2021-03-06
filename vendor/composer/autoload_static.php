<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf1e9802b8d164713ee0fa1a914defa7e
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Carbon_Fields\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Carbon_Fields\\' => 
        array (
            0 => __DIR__ . '/..' . '/htmlburger/carbon-fields/core',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf1e9802b8d164713ee0fa1a914defa7e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf1e9802b8d164713ee0fa1a914defa7e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf1e9802b8d164713ee0fa1a914defa7e::$classMap;

        }, null, ClassLoader::class);
    }
}
