<?php

namespace App\Models;

class ProductsModel extends DataBase {

    public function getFeatureInstrumens(){
        try {
            $stmt = $this->conn->prepare("SELECT subcategory.subcategoryName, products.productId, productName, " .
                " productDescription, imagesProducts.imageProductUri FROM products INNER JOIN imagesProducts " .
                " ON imagesProducts.productId = products.productId INNER JOIN subcategory ON " .
                " subcategory.subcategoryId = products.subcategoryId GROUP BY productId DESC LIMIT 3");
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (\PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function getProducts() {
        try {
            $stmt = $this->conn->prepare("SELECT subcategory.subcategoryName, products.productId, ".
            "productName, productDescription, productPrice, imagesProducts.imageProductUri FROM products ".
            " INNER JOIN imagesProducts ON imagesProducts.productId = products.productId " .
            " INNER JOIN subcategory ON subcategory.subcategoryId = products.subcategoryId GROUP BY productId ASC");
            $stmt->execute();

            return $stmt->fetchAll();
        } catch (\PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function searchProducts($text) {
        try {
            $stmt = $this->conn->prepare("SELECT subcategory.subcategoryName, brands.brandName, products.productId, productName, productDescription, productPrice, imagesProducts.imageProductUri FROM products INNER JOIN imagesProducts ON imagesProducts.productId = products.productId INNER JOIN subcategory ON subcategory.subcategoryId = products.subcategoryId INNER JOIN brands ON brands.brandId = products.brandId WHERE products.productName LIKE :text OR brands.brandName LIKE :text GROUP BY productId ASC");
            $stmt->bindValue(":text", "%$text%");
            $stmt->execute();

            return $stmt->fetchAll();
        } catch (\PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function getProductById($productId) {
        try {
            $stmt = $this->conn->prepare("SELECT products.productId, subcategory.subcategoryName, ".
            " productName, productPrice, productModel, productDescription, imagesProducts.imageProductUri, ".
            " brands.brandName FROM products INNER JOIN imagesProducts ON imagesProducts.productId = " . 
            " products.productId INNER JOIN brands ON brands.brandId = products.brandId INNER JOIN " . 
            " subcategory ON subcategory.subcategoryId = products.subcategoryId WHERE products.productId =:productId GROUP BY products.productId");
            $stmt->bindParam(":productId", $productId);
            $stmt->execute();
            foreach ($stmt->fetchAll() as $reg) {
                return $reg;
            }
            return null;
        } catch (\PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function getProductImages($productId) {
        try {
            $stmt = $this->conn->prepare("SELECT * FROM imagesProducts WHERE productId =:productId");
            $stmt->bindParam(":productId", $productId);
            $stmt->execute();

            return $stmt->fetchAll();
        } catch (\PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function consultarAccesoriosPrincipal(){
       try {
            $stmt = $this->conn->prepare("SELECT * FROM accesorio order by id desc limit 3");
            $stmt->execute();

            return $stmt->fetchAll();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }


    public function Tipoinstrumento(){
        try {
            $stmt = $this->conn->prepare("SELECT tipoinstrumento.id_tipo_instrumento,id_categoria,categoria from categoria inner join tipoinstrumento "
            . "on tipoinstrumento.id_tipo_instrumento=categoria.id_categoria group by id_tipo_instrumento");
            $stmt->execute();

            return $stmt->fetchAll();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function consultarInstrumentos2() {
        try {
             $stmt = $this->conn->prepare("SELECT tipoinstrumento.nombre,precio,imagen1,id_instrumento FROM instrumento inner join tipoinstrumento on  tipoinstrumento.id_tipo_instrumento="
             . "instrumento.id_instrumento where id_instrumento>=25 order by id_instrumento asc limit 24");
            $stmt->execute();

            return $stmt->fetchAll();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function consultarInstrumentos3() {
        try {
            $stmt = $this->conn->prepare("SELECT tipoinstrumento.nombre,precio,imagen1,id_instrumento FROM instrumento inner join tipoinstrumento on  tipoinstrumento.id_tipo_instrumento="
                    . "instrumento.id_instrumento where id_instrumento>=49 order by id_instrumento asc limit 24");
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function consultarFiltros() {
        try {
            $stmt = $this->conn->prepare("SELECT marca.nombre, color,precio FROM instrumento inner join instrumento on marca.id_marca=instrumento.id_instrumento");
            $stmt->execute();

            return $stmt->fetchAll();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }


    public function categoria(){
        try {
            $stmt = $this->conn->prepare("SELECT * from categoria order by id_categoria");
            $stmt->execute();

            return $stmt->fetchAll();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function getBrandById($idProduct) {
        try {
            $stmt = $this->conn->prepare("select marca from marca inner join instrumento on marca.id_marca=instrumento.id_instrumento where id_instrumento=:id_instrumento");
             $stmt->bindParam(":id_instrumento", $idProduct);
            $stmt->execute();
            foreach ($stmt->fetchAll() as $reg) {
                return $reg;
            }
            return null;
        } catch (\PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function getProductType($idProduct) {
        try {
            $stmt = $this->conn->prepare("select nombre from tipoinstrumento inner join instrumento on tipoinstrumento.id_tipo_instrumento=instrumento.id_instrumento"
                    . " where id_instrumento=:id_instrumento");
             $stmt->bindParam(":id_instrumento", $idProduct);
            $stmt->execute();
            foreach ($stmt->fetchAll() as $reg) {
                return $reg;
            }
            return null;
        } catch (\PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
    public function insertarProducto($color,$precio,$descripcion,$imagen,$cantidad) {
        try {
            $stmt = $this->conn->prepare("insert into producto (color,precio,descripcion,imagen,cantidad) values(:color,:precio,:descripcion,:imagen,:cantidad)");
            $stmt->bindParam(":color", $color);
            $stmt->bindParam(":precio", $precio);
            $stmt->bindParam(":descripcion", $descripcion);
            $stmt->bindParam(":imagen", $imagen);
            $stmt->bindParam(":cantidad", $cantidad);

            return $stmt->execute();

        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function editarProducto($color,$precio,$descripcion,$imagen,$cantidad,$id_producto) {
        try {
            $stmt = $this->conn->prepare("update producto set color=:color,precio=:precio,descripcion=:descripcion,imagen=:imagen,cantidad=:cantidad where id_producto=:id_producto");
             $stmt->bindParam(":color", $color);
            $stmt->bindParam(":precio", $precio);
            $stmt->bindParam(":descripcion", $descripcion);
            $stmt->bindParam(":imagen", $imagen);
            $stmt->bindParam(":cantidad", $cantidad);
            $stmt->bindParam(":id_producto", $id_producto);

            return $stmt->execute();

        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function borrarProducto($id_producto){
        try {
            $stmt = $this->conn->prepare("delete from producto where id_producto=:id_producto");
            $stmt->bindParam(":id_producto", $id_producto);

            return $stmt->execute();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

}
