<div class="detalles mt-5">

  <div class="col-lg-12">
      <div class="container">
          <div class="row">

              <div class="col-lg-6 col-md-12 imagen-principal text-center mb-5">
                  <img src="<?php echo $this->getNewById($idNew)["imagen"]?>" class="img-fluid">
              </div>

              <div  class="col-lg-6 text-justify mt-0 ">
                  <div class="col-lg-12">
                      <h1 class="mb-4"><?php echo $this->getNewById($idNew)["titulo"]?></h1>
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
