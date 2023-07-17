<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4570bedfa47f63c608ba062ec8cbd538
{
    public static $prefixesPsr0 = array (
        'M' => 
        array (
            'Monolog' => 
            array (
                0 => __DIR__ . '/..' . '/monolog/monolog/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit4570bedfa47f63c608ba062ec8cbd538::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit4570bedfa47f63c608ba062ec8cbd538::$classMap;

        }, null, ClassLoader::class);
    }
}