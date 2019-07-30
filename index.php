<?php

// Para iniciar las varibales de php
// Mostrar lios errores
// Solo en desarrollo
ini_set('display_errors', 1);
ini_set('display_startup_error', 1);
error_reporting(E_ALL);

require_once 'vendor/autoload.php';

//  Libreria para las rutas
use Aura\Router\RouterContainer;

$request = Zend\Diactoros\ServerRequestFactory::fromGlobals(
    $_SERVER,
    $_GET,
    $_POST,
    $_COOKIE,
    $_FILES
);

$routerContainer = new RouterContainer();
// Map d elas rutas
$map = $routerContainer->getMap();

function addPath($path) {
  return '/catalogoEmai' . $path;
}

$map->get('inicio', addPath('/'), [
    'controller' => 'App\controllers\HomeController',
    'action' => 'homeAction'
]);

$map->get('contacto', addPath('/contacto'), [
    'controller' => 'App\controllers\ContactController',
    'action' => 'contactAction'
]);

$matcher = $routerContainer->getMatcher();
$route = $matcher->match($request);

if (!$route) {
    echo 'No route';
} else {
    $handlerData = $route->handler;
    $controllerName = $handlerData['controller'];
    $actionName = $handlerData['action'];

    $controller = new $controllerName;
    $controller->$actionName($request);
}
