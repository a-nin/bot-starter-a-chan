<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4443d2986dffb32c25abaaf173b42825
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'LINE\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'LINE\\' => 
        array (
            0 => __DIR__ . '/..' . '/linecorp/line-bot-sdk/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4443d2986dffb32c25abaaf173b42825::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4443d2986dffb32c25abaaf173b42825::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
