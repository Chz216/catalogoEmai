<?php

namespace App\Controllers;

use App\Controllers\{ NewsController, ProductController, CIndex };

class HomeController {

    public function homeAction() {
        $productController = new ProductController();
        $newsController = new NewsController();
        // Queda Pendiante el Navbar dinamico
        // $cIndex = new CIndex();

        include './app/Views/Pages/home.php';
    }

}
