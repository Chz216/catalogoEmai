<?php

// Para iniciar las varibales de php
// Mostrar lios errores
// Solo en desarrollo
ini_set('display_errors', 1);
ini_set('display_startup_error', 1);
error_reporting(E_ALL);

require_once 'vendor/autoload.php';

use App\Routes\IndexRoutes;

class App {
    
    public $localUrl = "http://localhost/catalogoEmai/app/Views/";

    public function getRoutes() {
        $indexRoutes = new IndexRoutes();   
        $indexRoutes->getRoutes();
    }

    public function getMenu() {
        include 'app/Views/Shared/menu.php';
    }

}