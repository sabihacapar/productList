<?php
require_once '../controllers/ProductController.php';
require_once '../controllers/AuthController.php';

function route($uri)
{
    $parts = explode('/', trim($uri, '/'));

    $controllerName = ucfirst($parts[0]) . 'Controller';
    $methodName = isset($parts[1]) ? $parts[1] : 'index';
    $params = array_slice($parts, 2);

    if (class_exists($controllerName) && method_exists($controllerName, $methodName)) {
        $controller = new $controllerName();
        call_user_func_array([$controller, $methodName], $params);
    } else {
        // 404 Not Found
        echo "404 Not Found";
    }
}
