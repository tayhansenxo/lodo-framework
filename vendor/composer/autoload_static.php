<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit93d84befa6db5e47add15e93345417d7
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'LodoFramework\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'LodoFramework\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit93d84befa6db5e47add15e93345417d7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit93d84befa6db5e47add15e93345417d7::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
