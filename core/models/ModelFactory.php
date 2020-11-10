<?php
namespace core\models;
define('ROOT', dirname(__DIR__));
require_once (ROOT.'/core/autoload.php');

class ModelFactory
{
    public static function getInstance($type)
    {
        $model_name = "\app\models\\". $type . "Model";
        $create_model = new $model_name();
        return $create_model;

    }

}