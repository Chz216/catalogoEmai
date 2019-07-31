
<div class="detalles mt-5">

    <div class="col-lg-12">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-12 imagen-principal text-center">
                    <img src="<?php echo $this->getProductById($idProduct)["imagen1"]?>" class="img-fluid">

                    <div class="col-lg-12 mt-5 imagen-producto-detalle">

                        <div class="row">
                            <div class="col-md-4">
                                <img src="<?php echo $this->getProductById($idProduct)["imagen1"]?>" class="img-fluid" alt=""/>
                            </div>
                            <div class="col-md-4">
                                <img src="<?php echo $this->getProductById($idProduct)["imagen2"]?>" class="img-fluid" alt=""/>
                            </div>
                            <div class="col-md-4">
                                <img src="<?php echo $this->getProductById($idProduct)["imagen3"]?>" class="img-fluid" alt=""/>
                            </div>
                        </div>

                    </div>

                </div>

                <div  class="col-lg-6 text-justify mt-0 ">
                    <div class="col-lg-12">
                        <h1 class="mb-4"><?php echo $this->getProductType($idProduct)["nombre"]?></h1>
                    </div>
                    <div class="col-lg-12">
                        <div class="d-flex flex-column flex-sm-row align-items-sm-center justify-content-sm-between mb-4">
                            <ul class="list-inline mb-2 mb-sm-0">
                                <li class="list-inline-item h4 font-weight-light mb-0">
                                    <?php echo $this->getProductById($idProduct)["precio"]?>
                                </li>
                                <li class="list-inline-item text-muted font-weight-light">
                                </li>
                            </ul>

                            <div class="d-flex align-items-center">

                                <ul class="list-inline mr-2 mb-0">
                                    <li class="list-inline-item mr-0"><i class="fa fa-star text-primary"></i></li>
                                    <li class="list-inline-item mr-0"><i class="fa fa-star text-primary"></i></li>
                                    <li class="list-inline-item mr-0"><i class="fa fa-star text-primary"></i></li>
                                    <li class="list-inline-item mr-0"><i class="fa fa-star text-primary"></i></li>
                                    <li class="list-inline-item mr-0"><i class="fa fa-star text-gray-300"></i></li>
                                </ul><span class="text-muted text-uppercase text-sm">25 reviews</span>

                            </div>

                        </div>
                    </div>
                    <div class="col-lg-12">
                        <?php echo $this->getProductById($idProduct)["modelo"]?>
                    </div>
                    <div class="col-lg-12">
                        <?php echo $this->getBrandById($idProduct)["marca"]?>
                    </div>
                    <div class="col-lg-12">
                        <p class="">DESCRIPCIÓN</p>
                        <p class="mb-4 text-muted"><?php echo $this->getProductById($idProduct)["descripcion"]?></p>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>
