<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitec29859e157c8fb9286575a0c28d1e28
{
    public static $prefixLengthsPsr4 = array (
        'w' => 
        array (
            'wdp\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'wdp\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitec29859e157c8fb9286575a0c28d1e28::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitec29859e157c8fb9286575a0c28d1e28::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitec29859e157c8fb9286575a0c28d1e28::$classMap;

        }, null, ClassLoader::class);
    }
}
