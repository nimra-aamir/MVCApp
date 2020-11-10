<?php
namespace core\models;

define('ROOT', dirname(__DIR__));
require_once (ROOT.'/core/autoload.php');

interface ModelInterface
{
    public function addObj($table_name, $entity);
    public function getObj($table_name, $entity);
    public function updateObj($table_name, $entity);
    public function deleteObj($table_name, $entity);
    public function getAll($table_name, $entity);
    public function performAction($model, $action, $entity, $model_name); //perform the function passed
    public function loadModel($request); // load the model using model factory
    public function getConnection(); //get singleton instance
}