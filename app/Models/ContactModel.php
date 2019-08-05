<?php

namespace App\Models;

class ContactModel extends DataBase {

    public function getForm() {
        try {
            $stmt = $this->conn->prepare("SELECT * FROM formulario");
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function getAmountComments(){
        try {
           $stmt = $this->conn->prepare("SELECT count(*) as total from formulario");
           $stmt->execute();
           foreach ( $stmt->fetchAll() as $registro){
               return $registro;
           }
        } catch (Exception $ex) {
            echo "Error: ". $e->getMessage();
        }
    }

    public function getFormById($id) {
        try {
            $stmt = $this->conn->prepare("select * from formulario where id=:id");
            $stmt->bindParam(":id", $id);
            $stmt->execute();
            foreach ($stmt->fetchAll() as $reg) {
                return $reg;
            }

            return null;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function insertForm($formData) {
        try {
            $stmt = $this->conn->prepare("INSERT INTO contact (contactName, contactEmail, contactComment) VALUES (:contactName, :contactEmail, :contactComment)");
            $stmt->bindParam(":contactName", $formData["contactName"]);
            $stmt->bindParam(":contactEmail", $formData["contactEmail"]);
            $stmt->bindParam(":contactComment", $formData["contactComment"]);

            return $stmt->execute();

        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        unset($_POST["lo_que_sea"] );
    }


    public function deletedForm($id){
        try {
            $stmt = $this->conn->prepare("delete from formulario where id=:id");
            $stmt->bindParam(":id", $id);

            return $stmt->execute();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

}