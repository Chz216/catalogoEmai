<?php

namespace App\Controllers;

use App\Controllers\{ NewsController, ProductsController, CIndex };

class HomeController {

    public function homeAction() {
        $productController = new ProductsController();
        $newsController = new NewsController();
        // Queda Pendiante el Navbar dinamico
        // $cIndex = new CIndex();

        include './app/Views/Pages/home.php';
    }

}
