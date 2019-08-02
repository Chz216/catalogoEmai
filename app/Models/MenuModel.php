<?php

namespace App\Models;

class MenuModel extends DataBase {

    public function getCategoriesMenu() {
        try {
            $stmt = $this->conn->prepare("SELECT categoryId ,categoryName from category");
            $stmt->execute();

            return $stmt->fetchAll();
        } catch (\PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function getSubcategoriesMenu($categoryId) {
        try {
            $stmt = $this->conn->prepare("SELECT subcategoryId, subcategoryName from subcategory WHERE categoryId =:categoryId");
            $stmt->bindParam(":categoryId", $categoryId);
            $stmt->execute();

            return $stmt->fetchAll();
        } catch (\PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

}