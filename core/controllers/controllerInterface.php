<?php
namespace core\controllers;
define('ROOT', dirname(__DIR__));
require_once (ROOT.'/core/autoload.php');

interface ControllerInterface{
    public function addObj($params);
    public function getObj($params);
    public function updateObj($params);
    public function deleteObj($params);
    public function getAll();
    public function doAction($request);
    public function loadController($controller);
}