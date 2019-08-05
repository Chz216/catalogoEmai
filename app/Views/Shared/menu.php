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
                      <?php echo $menuController->getCategoriesMenu(); ?>
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
          <form class="navbar-form" method="post" action="/catalogoEmai/buscar">
              <div class="input-group">
              <input name="text" type="text" class="form-control" placeholder="Buscar Productos...">
              <div class="input-group-append">
                  <button class="btn btn-danger" type="submit ">
                  <i class="fa fa-search"></i>
                  </button>
              </div>
              </div>
          </form>
      </div>
  </nav>
<!--Fin Navbar-->
