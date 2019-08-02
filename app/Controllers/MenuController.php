<?php

namespace App\Controllers;

use App\Models\MenuModel;

class MenuController {

    private $model;

    public function __construct() {
        $this->model = new MenuModel();
    }

    public function getCategoriesMenu() {
        $categories = $this->model->getCategoriesMenu();
        $acu = "";
        foreach ($categories as $category) {
            $acu = $acu . '
                <div class="col-sm-3 col-lg-3">
                    <h5>' . $category["categoryName"] . '</h5>
                    ' . $this->getSubcategoriesMenu($category["categoryId"]) . '
                </div>
            ';
        }
        return $acu;
    }

    public function getSubcategoriesMenu($categoryId) {
        $subcategories = $this->model->getSubcategoriesMenu($categoryId);
        $acu = "";
        foreach ($subcategories as $subcategory) {
            $acu = $acu . '<a class="dropdown-item" href="/catalogoEmai/catalogo">' . $subcategory["subcategoryName"]  . '</a>';
        }
        return $acu;
    }

}