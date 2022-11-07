<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInite88d953bb61081dd6e7d124ab36bc186
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInite88d953bb61081dd6e7d124ab36bc186', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInite88d953bb61081dd6e7d124ab36bc186', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInite88d953bb61081dd6e7d124ab36bc186::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}