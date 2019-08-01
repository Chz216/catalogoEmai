<?php

namespace App\Routes;
//  Libreria para las rutas
use Aura\Router\RouterContainer;

class IndexRoutes {

    public function getRoutes() {
      $request = \Zend\Diactoros\ServerRequestFactory::fromGlobals(
          $_SERVER,
          $_GET,
          $_POST,
          $_COOKIE,
          $_FILES
      );       
      $routerContainer = new RouterContainer();
        // Map de las rutas
        $map = $routerContainer->getMap();
          
        $map->get('/', $this->addPath('/'), [
            'controller' => 'App\Controllers\HomeController',
            'action' => 'homeAction'
        ]);

        $map->get('/home', $this->addPath('/inicio'), [
            'controller' => 'App\Controllers\HomeController',
        'action' => 'homeAction'
        ]);

        $map->get('news', $this->addPath('/noticias'), [
            'controller' => 'App\Controllers\NewsController',
            'action' => 'newsAction'
        ]);

        $map->get('contact', $this->addPath('/contacto'), [
            'controller' => 'App\Controllers\ContactController',
            'action' => 'contactAction'
        ]);

        $map->post('saveContact', $this->addPath('/contacto'), [
            'controller' => 'App\Controllers\ContactController',
            'action' => 'contactAction'
        ]);

        $map->get('catalogue', $this->addPath('/catalogo'), [
            'controller' => 'App\Controllers\CatalogueController',
            'action' => 'catalogueAction'
        ]);

        $map->get('product', $this->addPath('/producto/{id}'), [
            'controller' => 'App\Controllers\ProductDetailsController',
            'action' => 'productDetailsAction'
        ]);

        $map->get('new', $this->addPath('/noticia/{id}'), [
            'controller' => 'App\Controllers\NewsController',
            'action' => 'newDetailsAction'
        ]);

        $map->get('search', $this->addPath('/buscar/{text}'), [
            'controller' => 'App\Controllers\SearchController',
            'action' => 'searchAction'
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
    }

    function addPath($path) {
      return '/catalogoEmai' . $path;
    }

}