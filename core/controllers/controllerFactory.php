<?php
namespace core\controllers;
define('ROOT', dirname(__DIR__));
require_once (ROOT.'/core/autoload.php');

class controllerFactory
{
    public static function getInstance($type)
    {
        $controller_name = "\app\controllers\\". $type . "Controller";
        $create_controller = new $controller_name();
        return $create_controller;

    }

}