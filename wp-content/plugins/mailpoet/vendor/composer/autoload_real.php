<?php
if (!defined('ABSPATH')) exit;
// autoload_real.php @generated by Composer
class ComposerAutoloaderInitd6c53f75b526fbb2ea1295187399e31a
{
 private static $loader;
 public static function loadClassLoader($class)
 {
 if ('Composer\Autoload\ClassLoader' === $class) {
 require __DIR__ . '/ClassLoader.php';
 }
 }
 public static function getLoader()
 {
 if (null !== self::$loader) {
 return self::$loader;
 }
 require __DIR__ . '/platform_check.php';
 spl_autoload_register(array('ComposerAutoloaderInitd6c53f75b526fbb2ea1295187399e31a', 'loadClassLoader'), true, true);
 self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
 spl_autoload_unregister(array('ComposerAutoloaderInitd6c53f75b526fbb2ea1295187399e31a', 'loadClassLoader'));
 require __DIR__ . '/autoload_static.php';
 call_user_func(\Composer\Autoload\ComposerStaticInitd6c53f75b526fbb2ea1295187399e31a::getInitializer($loader));
 $loader->register(true);
 $includeFiles = \Composer\Autoload\ComposerStaticInitd6c53f75b526fbb2ea1295187399e31a::$files;
 foreach ($includeFiles as $fileIdentifier => $file) {
 composerRequired6c53f75b526fbb2ea1295187399e31a($fileIdentifier, $file);
 }
 return $loader;
 }
}
function composerRequired6c53f75b526fbb2ea1295187399e31a($fileIdentifier, $file)
{
 if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
 $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;
 require $file;
 }
}
