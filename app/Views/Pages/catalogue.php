
<div class="col-lg-12 mt-4">
    <div class="row">
        <div class="col-lg-3">
            <div class="accordion" id="accordionExample">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Marcas
                            </button>
                        </h2>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                            <ul class="list-group">
                                <li class="list-group-item"><input class="form-check-input position-static ml-1" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">&nbsp Cras justo odio</li>
                                    <li class="list-group-item"><input class="form-check-input position-static ml-1" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">&nbsp Cras justo odio</li>
                                    <li class="list-group-item"><input class="form-check-input position-static ml-1" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">&nbsp Cras justo odio</li>
                                <li class="list-group-item"><input class="form-check-input position-static ml-1" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">&nbsp Cras justo odio</li>
                                    <li class="list-group-item"><input class="form-check-input position-static ml-1" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">&nbsp Cras justo odio</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Precio
                            </button>
                        </h2>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                        <ul class="list-group">
                                <li class="list-group-item">Cras justo odio</li>
                                <li class="list-group-item">Dapibus ac facilisis in</li>
                                <li class="list-group-item">Morbi leo risus</li>
                                <li class="list-group-item">Porta ac consectetur ac</li>
                                <li class="list-group-item">Vestibulum at eros</li>
                            </ul> 
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Color
                            </button>
                        </h2>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body">

                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-lg-9 productos-catalogo">

            <div class="col-lg-12 text-center">
                <div class="row">
                <?php echo $this->getProducts() ?>
                </div>
                <div class="col-lg-12">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center mt-4">
                            <li class="page-item disabled">
                                <a class="page-link" href="catalogo.php" tabindex="-1" aria-disabled="true">Anterior</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="catalogo.php">1</a></li>
                            <li class="page-item"><a class="page-link" href="catalogo-2.php">2</a></li>
                            <li class="page-item"><a class="page-link" href="catalogo-3.php">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="catalogo.php"tabindex="+1" aria-disabled="true">Siguiente</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>

        </div>
    </div>
</div>
</div>
