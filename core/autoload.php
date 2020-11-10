<?php
namespace core;

spl_autoload_register(
/**
 * This function is responsible for autoloading any class that is needed
 * @param $class
 */
    function ($class) {

        $file = ROOT . '/' ."app/controllers/" .str_replace('\\', '/', $class) . '.php';
        if (is_readable($file)) {
            require_once $file;
        } elseif (is_readable(ROOT . '/' ."app/models/" .str_replace('\\', '/', $class) . '.php')) {
            require_once ROOT . '/' ."app/models/" .str_replace('\\', '/', $class) . '.php';
        } elseif (is_readable(ROOT . '/' ."app/views/" .str_replace('\\', '/', $class) . '.php')) {
            require_once ROOT . '/' ."app/views/" .str_replace('\\', '/', $class) . '.php';
        } elseif (is_readable(ROOT . '/' ."core/controllers/" .str_replace('\\', '/', $class) . '.php')) {
            require_once ROOT . '/' ."core/controllers/" .str_replace('\\', '/', $class) . '.php';
        } elseif (is_readable(ROOT . '/' ."core/models/" .str_replace('\\', '/', $class) . '.php')) {
            require_once ROOT . '/' ."core/models/" .str_replace('\\', '/', $class) . '.php';
        } elseif (is_readable(ROOT . '/' ."core/views/" .str_replace('\\', '/', $class) . '.php')) {
            require_once ROOT . '/' ."core/views/" .str_replace('\\', '/', $class) . '.php';
        } elseif (is_readable(ROOT . '/' ."core/" .str_replace('\\', '/', $class) . '.php')) {
            require_once ROOT . '/' ."core/" .str_replace('\\', '/', $class) . '.php';
        } elseif (is_readable(ROOT . '/' . str_replace('\\', '/', $class) . '.php')){
            $file = ROOT . '/' . str_replace('\\', '/', $class) . '.php';
            if (is_readable($file)) {
                require_once $file;
            }
        }

    });