<?php
namespace core\controllers;
define('ROOT', dirname(__DIR__));
require_once (ROOT.'/core/autoload.php');

class baseController implements \core\controllers\controllerInterface{
    public function addObj ($params) {

    }
    public function getObj ($params) {

    }
    public function updateObj ($params) {

    }
    public function deleteObj ($params) {

    }
    public function getAll() {

    }

    public function doAction ($request) {
        $model = $this->loadModel($request->controller);
        $result = $model->doAction($request);
        echo $result;
    }

    public function loadModel ($model) {
        return \core\models\ModelFactory::getInstance($model); //get controller
    }


}