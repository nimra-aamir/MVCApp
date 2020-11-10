<?php
define('ROOT', dirname(__DIR__));
require_once (ROOT.'/core/autoload.php');
require_once (ROOT.'/core/dispatcher.php');
echo ROOT;
$dispatch = new \core\dispatcher();
$dispatch->dispatch();