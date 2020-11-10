<?php
namespace core;
define('ROOT', dirname(__DIR__));
require_once (ROOT.'/core/autoload.php');
class dispatcher
{

    private $request;
    public function dispatch()
    {
        print_r($_REQUEST["controller"]);
        $this->request = new request();
        router::parse($this->request);
        $controller = $this->loadController();
        $controller->doAction($this->request);

    }

    public function loadController()
    {
/*        $name = $this->request->controller . "Controller";
        $file = 'app/controllers/' . $name . '.php';
        require($file);
        $controller = new $name();*/

        return \core\controllers\controllerFactory::getInstance($this->request->controller);
        //return $controller;
    }

}