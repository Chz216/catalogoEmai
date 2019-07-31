<?php

namespace App\Controllers;

use App\Models\ContactModel;

class ContactController {

    private $model;

    public function contactAction($request) {
        include './app/Views/Pages/contact.php';
        $this->insertForm($request);
    }

    public function __construct() {
        $this->model= new ContactModel();
    }

    public function insertForm($request){
        if ($request->getMethod() == 'POST') {
            $formData = $request->getParsedBody();
            $this->model->insertForm($formData);
        }
        //********Bug en contacto insert cada vez que se actuliza *********//
    }

    public function formulario($id){
        $formulario= $this->model->consultarFormulario($id);
        return $formulario;
    }

    public function borrarFormulario($id){
        $this->model->borrarFormulario($id);
        header("Location: panel.php");
    }

}