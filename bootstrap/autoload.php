<?php

/**
 * Autoloader for class files
 * @param string $class The name of a class to load
 */
function class_autoloader($class)
{
    $filename = dirname(__FILE__) . DS . '..' . DS . 'includes' . DS . 'class-' . strtolower($class) . '.php';

    if (file_exists($filename)) {
        require $filename;
    }
}


if( !spl_autoload_register('class_autoloader', true, true) ) {
    die('Could not load class files.');
}
