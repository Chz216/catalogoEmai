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
// Map de las rutas
$map = $routerContainer->getMap();

function addPath($path) {
    return '/catalogoEmai' . $path;
}

$map->get('/', addPath('/'), [
    'controller' => 'App\Controllers\HomeController',
    'action' => 'homeAction'
]);

$map->get('/home', addPath('/inicio'), [
    'controller' => 'App\Controllers\HomeController',
'action' => 'homeAction'
]);

$map->get('news', addPath('/noticias'), [
    'controller' => 'App\Controllers\NewsController',
    'action' => 'newsAction'
]);

$map->get('contact', addPath('/contacto'), [
    'controller' => 'App\Controllers\ContactController',
    'action' => 'contactAction'
]);

$map->post('saveContact', addPath('/contacto'), [
    'controller' => 'App\Controllers\ContactController',
    'action' => 'contactAction'
]);

$map->get('catalogue', addPath('/catalogo'), [
    'controller' => 'App\Controllers\CatalogueController',
    'action' => 'catalogueAction'
]);

$map->get('product', addPath('/producto/{id}'), [
    'controller' => 'App\Controllers\ProductDetailsController',
    'action' => 'productDetailsAction'
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
