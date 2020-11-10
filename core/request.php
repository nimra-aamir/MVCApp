<?php
namespace core;
class request
{
    public $url;
    public $action;
    public $params;
    public $controller;
    public $request;
    public $entity;
    public function __construct()
    {
        echo $_SERVER['REQUEST_METHOD'];
        print_r($_REQUEST);
        $this->url = $_SERVER["REQUEST_URI"];
        $this->request = $_REQUEST;
        $this->entity = null;
    }
}