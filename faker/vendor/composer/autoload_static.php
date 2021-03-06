<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0b304b56c13878db43608a5dc01bd28e
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Faker\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Faker\\' => 
        array (
            0 => __DIR__ . '/..' . '/fzaninotto/faker/src/Faker',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0b304b56c13878db43608a5dc01bd28e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0b304b56c13878db43608a5dc01bd28e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0b304b56c13878db43608a5dc01bd28e::$classMap;

        }, null, ClassLoader::class);
    }
}
