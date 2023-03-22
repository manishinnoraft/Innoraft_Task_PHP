<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1d65bffe4fe07454fe52e2963f2cf143
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1d65bffe4fe07454fe52e2963f2cf143::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1d65bffe4fe07454fe52e2963f2cf143::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1d65bffe4fe07454fe52e2963f2cf143::$classMap;

        }, null, ClassLoader::class);
    }
}
