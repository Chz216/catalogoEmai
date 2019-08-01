<?php

namespace App\Controllers;

use App\Controllers\CatalogueController;

class SearchController {

    public function searchAction() {
        $catalogueController = new CatalogueController();
        // Queda Pendiante el Navbar dinamico
        // $cIndex = new CIndex();
        // $urlController = new URLController();
        // $url = $urlController->RouteLocal();
        include './app/Views/Pages/search.php';
    }

}
