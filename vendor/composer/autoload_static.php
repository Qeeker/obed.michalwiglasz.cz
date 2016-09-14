<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit10261e41a11265c60d6ceaa7713c45d9
{
    public static $prefixLengthsPsr4 = array (
        'Z' => 
        array (
            'Zend\\Text\\' => 10,
            'Zend\\Stdlib\\' => 12,
            'Zend\\ServiceManager\\' => 20,
        ),
        'I' => 
        array (
            'Interop\\Container\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Zend\\Text\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-text/src',
        ),
        'Zend\\Stdlib\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-stdlib/src',
        ),
        'Zend\\ServiceManager\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-servicemanager/src',
        ),
        'Interop\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/container-interop/container-interop/src/Interop/Container',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit10261e41a11265c60d6ceaa7713c45d9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit10261e41a11265c60d6ceaa7713c45d9::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
