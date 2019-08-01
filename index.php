<?php $localUrl = "http://localhost/catalogoEmai/app/Views/" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CatalogoEmai</title>
    <link href="<?php echo $localUrl; ?>assets/css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo $localUrl; ?>assets/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo $localUrl; ?>assets/estilos/estilos.css" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=DM+Sans|Poppins&display=swap" rel="stylesheet">
</head>
<body>
    <!--Inicia Navbar-->
    <nav class="navbar navbar-expand-lg bg-black">
        <a class="navbar-brand" href="/catalogoEmai/inicio ">
          <img src="<?php echo $localUrl; ?>assets/images/log_emai.png" alt="navbar" width="110px">
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
                          <h5>' . $instrumento["categoria"] . '</h5>
                          <a class="dropdown-item" href="/catalogoEmai/catalogo">Percusion</a>
                          <a class="dropdown-item" href="#">Cuerda</a>
                          <a class="dropdown-item" href="#">Viento</a>
                          <a class="dropdown-item" href="#">Audio</a>
                        </div>
                        <div class="col-sm-3 col-lg-3">
                           <h5>' . $instrumento["categoria"] . '</h5>
                          <a href="#" class="dropdown-item">Percusion</a>
                          <a href="#" class="dropdown-item">Cuerda</a>
                          <a href="#" class="dropdown-item">Viento</a>
                          <a href="#" class="dropdown-item">Audio</a>
                        </div>
                        <div class="col-sm-3 col-lg-3">
                           <h5>' . $instrumento["categoria"] . '</h5>
                          <a href="#" class="dropdown-item">Percusion</a>
                          <a href="#" class="dropdown-item">Cuerda</a>
                          <a href="#" class="dropdown-item">Viento</a>
                          <a href="#" class="dropdown-item">Audio</a>
                        </div>
                        <div class="col-sm-3 col-lg-3">
                           <h5>' . $instrumento["categoria"] . '</h5>
                          <a href="#" class="dropdown-item">Percusion</a>
                          <a href="#" class="dropdown-item">Cuerda</a>
                          <a href="#" class="dropdown-item">Viento</a>
                          <a href="#" class="dropdown-item">Audio</a>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3 col-lg-3">
                          <h5>Instrumentos Eléctricos</h5>
                          <a href="#" class="dropdown-item">Percusion</a>
                          <a href="#" class="dropdown-item">Cuerda</a>
                          <a href="#" class="dropdown-item">Viento</a>
                          <a href="#" class="dropdown-item">Audio</a>
                        </div>
                        <div class="col-sm-3 col-lg-3">
                          <h5>Audio e Iluminación</h5>
                          <a href="#" class="dropdown-item">Percusion</a>
                          <a href="#" class="dropdown-item">Cuerda</a>
                          <a href="#" class="dropdown-item">Viento</a>
                          <a href="#" class="dropdown-item">Audio</a>
                        </div>
                        <div class="col-sm-3 col-lg-3">
                          <h5>Accesorios</h5>
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
                    <a class="nav-link" href="/catalogoEmai/contacto">Contactanos</a>
                </li>
            </ul>
            <form class="navbar-form" role="search">
                <div class="input-group">
                <input type="text" class="form-control" placeholder="Buscar Productos...">
                <div class="input-group-append">
                    <button class="btn btn-danger" type="button">
                    <i class="fa fa-search"></i>
                    </button>
                </div>
                </div>
            </form>
        </div>
    </nav>
<!--Fin Navbar-->

    <?php require 'app/app.php' ?>

    <footer class="pie text-white">
        <div class="col-lg-12 p-3 mb-2text-white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12">
                        <div class="col-lg-12 text-center">
                            <h6 class="lead">TIENDA MUSICAL</h6>    
                        </div>
                        <div class="col-lg-12 col-md-12 text-center">
                            <img src="<?php echo $localUrl; ?>assets/images/emai.png" width="120" height="70" alt="">    
                        </div>
                        <div class="col-lg-12 text-center">
                            <h6 class="lead">CONÓCENOS</h6>
                        </div>

                    </div>
                    <div class="col-lg-4 text-center">
                        <h6 class="lead">ACERCA DE</h6>
                        <p>Somos una empresa con mas de 5 años de experiencia trabajando en la ciudad de Tehuacan </p>
                    </div>
                    <div class="col-lg-4 text-center">
                        <H6 class="lead">Contáctanos</H6>

                        <p><a href="https://www.facebook.com/tiendaemai"><span class="fa fa-facebook-square mr-2" style='color:white;'></span></a>Facebook</p>

                        <span class="fa fa-phone mr-2" ></span><a href="tel:+340 38-4-34-67" style='color:white;'>38-4-34-67</a>
                        <p><span class="fa fa-map-marker mr-2"></span>Centro Tehuacan</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

<script src="<?php echo $localUrl; ?>assets/js/jquery.js" type="text/javascript"></script>
<script src="<?php echo $localUrl; ?>assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo $localUrl; ?>assets/scripts/scripts.js" type="text/javascript"></script>
</body>
</html>