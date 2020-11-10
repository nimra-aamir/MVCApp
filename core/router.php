<?php
namespace core;
class router
{

    static public function parse(&$request)
    {
         $request->controller = $_REQUEST["controller"]; //get controller from parameter
         $request->action = $_REQUEST["action"]; //get action from parameter
         unset($_REQUEST["action"]);   // free the action and controller parameteres
         unset($_REQUEST["controller"]);
         $request->params = $_REQUEST; //set parameters

    }

    static public function parseURL (&$request)
    {
        $url = $request->url; //get URL
        $url = trim($url);
        $query_str = parse_url($url, PHP_URL_QUERY);
        parse_str($query_str, $query_params); //Get params
        $explode_url = explode('/', $url);
        $explode_url = array_slice($explode_url, 2);
        $request->controller = $explode_url[0]; //store controller
        $request->action = $explode_url[1]; //store action
        $request->params = $query_params; //store params

    }
}