<?php

//http://site1/News/showNews/
require_once __DIR__ . '/autoload.php';

$route = explode('/',$_GET['__route']);

$controller = $route[0];
$method = $route[1];


if (true == empty($controller)) {
    $controller = 'App\\Controllers\\News';
    $method = 'showNews';
    }
else {
    $controller = 'App\\Controllers\\' . $controller;
}


try {
    if (false == method_exists($controller, $method)) {
        throw new Exception('index:<br>Метод класса не найден.');
    }

    $ctrl = new $controller();
    $ctrl->$method();
}
    catch (Exception $e) {
        echo $e->getMessage();
    }
//$controller->$method();