<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb87234c095638d8dc6851b535ae10ad3
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Stripe\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Stripe\\' => 
        array (
            0 => __DIR__ . '/..' . '/stripe/stripe-php/lib',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb87234c095638d8dc6851b535ae10ad3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb87234c095638d8dc6851b535ae10ad3::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
