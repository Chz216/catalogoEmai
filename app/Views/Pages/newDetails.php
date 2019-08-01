<div class="detalles mt-5">

  <div class="col-lg-12">
      <div class="container">
          <div class="row">

              <div class="col-lg-6 col-md-12 imagen-principal text-center">
                  <img src="<?php echo $this->getNewById($idNew)["imagen"]?>" class="img-fluid">

                  <div class="col-lg-12 mt-5 imagen-producto-detalle">

                      <div class="row">
                          <div class="col-md-4">
                              <img src="<?php echo $this->getNewById($idNew)["imagen1"]?>" class="img-fluid" alt=""/>
                          </div>
                          <div class="col-md-4">
                              <img src="<?php echo $this->getNewById($idNew)["imagen2"]?>" class="img-fluid" alt=""/>
                          </div>
                          <div class="col-md-4">
                              <img src="<?php echo $this->getNewById($idNew)["imagen3"]?>" class="img-fluid" alt=""/>
                          </div>
                      </div>

                  </div>

              </div>

              <div  class="col-lg-6 text-justify mt-0 ">
                  <div class="col-lg-12">
                      <h1 class="mb-4"><?php echo $this->getNewById($idNew)["descripcion"]?></h1>
                  </div>
                  <div class="col-lg-12">
                      <p class="">DESCRIPCIÓN</p>
                      <p class="mb-4 text-muted"><?php echo $this->getNewById($idNew)["descripcion"]?></p>
                  </div>
              </div>

          </div>
      </div>

  </div>
</div>
