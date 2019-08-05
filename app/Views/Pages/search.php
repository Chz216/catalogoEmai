<div class="col-lg-12 mt-4">
    <div class="row">

        <div class="container productos-catalogo">

            <div class="col-lg-12 text-center">
                <div class="row">
                <?php echo $this->searchProducts() ?>
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
