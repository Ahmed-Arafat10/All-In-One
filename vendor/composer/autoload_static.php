<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4d42d90a75d30cdceed5ed25f1c288fb
{
    public static $prefixLengthsPsr4 = array (
        'A' =>
        array (
            'Ahmedarafat\\AllInOne\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Ahmedarafat\\AllInOne\\' =>
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/vendor' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4d42d90a75d30cdceed5ed25f1c288fb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4d42d90a75d30cdceed5ed25f1c288fb::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4d42d90a75d30cdceed5ed25f1c288fb::$classMap;

        }, null, ClassLoader::class);
    }
}