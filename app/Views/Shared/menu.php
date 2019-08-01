<!--Inicia Navbar-->
<nav class="navbar navbar-expand-lg bg-black">
      <a class="navbar-brand" href="/catalogoEmai/inicio ">
        <img src="<?php echo $this->localUrl; ?>assets/images/log_emai.png" alt="navbar" width="110px">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNabvar">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="myNabvar">
          <ul class="navbar-nav mr-4">
          <li class="nav-item">
                <a class="nav-link" href="/catalogoEmai/inicio">Inicio</span></a>
              </li>
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="mega-menu" data-toggle="dropdown">
                    Productos
                  </a>
                  <div class="dropdown-menu" aria-labelledby="mega-menu">
                    <div class="row">
                      <div class="col-sm-3 col-lg-3">
                        <h5>Aire</h5>
                        <a class="dropdown-item" href="/catalogoEmai/catalogo">Percusion</a>
                        <a class="dropdown-item" href="#">Cuerda</a>
                        <a class="dropdown-item" href="#">Viento</a>
                        <a class="dropdown-item" href="#">Audio</a>
                      </div>
                      <div class="col-sm-3 col-lg-3">
                          <h5>Percución</h5>
                        <a href="#" class="dropdown-item">Percusion</a>
                        <a href="#" class="dropdown-item">Cuerda</a>
                        <a href="#" class="dropdown-item">Viento</a>
                        <a href="#" class="dropdown-item">Audio</a>
                      </div>
                      <div class="col-sm-3 col-lg-3">
                          <h5>Cuerda</h5>
                        <a href="#" class="dropdown-item">Percusion</a>
                        <a href="#" class="dropdown-item">Cuerda</a>
                        <a href="#" class="dropdown-item">Viento</a>
                        <a href="#" class="dropdown-item">Audio</a>
                      </div>
                    </div>
                  </div>
                </li>
              <li class="nav-item">
                <a class="nav-link" href="/catalogoEmai/noticias">Noticias</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="/catalogoEmai/contacto">Contáctanos</a>
              </li>
          </ul>
          <form class="navbar-form" role="search">
              <div class="input-group">
              <input type="text" class="form-control" placeholder="Buscar Productos...">
              <div class="input-group-append">
                
                  <a class="btn btn-danger" type="button" href="/catalogoEmai/buscar/fdf">
                  <i class="fa fa-search"></i>
                  </a>
              </div>
              </div>
          </form>
      </div>
  </nav>
<!--Fin Navbar-->