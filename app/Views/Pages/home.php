<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CatalogoEmai</title>
    <link href="app/Views/assets/css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <link href="app/Views/assets/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="app/Views/assets/estilos/estilos.css" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=DM+Sans|Poppins&display=swap" rel="stylesheet">
</head>
<body>
    <!--Inicia Navbar-->
    <nav class="navbar navbar-expand-lg bg-black">
        <a class="navbar-brand" href="inicio "><img src="app/Views/assets/images/log_emai.png" alt="navbar" width="110px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNabvar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="myNabvar">
            <ul class="navbar-nav mr-4">
            <li class="nav-item">
                  <a class="nav-link" href="inicio">Inicio</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="mega-menu" data-toggle="dropdown">
                      Productos
                    </a>
                    <div class="dropdown-menu" aria-labelledby="mega-menu">
                      <div class="row">
                        <div class="col-sm-3 col-lg-3">
                          <h5>' . $instrumento["categoria"] . '</h5>
                          <a class="dropdown-item" href="catalogo">Percusion</a>
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
                  <a class="nav-link" href="noticias">Noticias</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contacto">Contactanos</a>
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

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="app/Views/assets/images/comprimida 2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="app/Views/assets/images/comprimida.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="app/Views/assets/images/comprimida3.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="fa fa-chevron-circle-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="fa fa-chevron-circle-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="encabezado mt-5">
        <div class="col-sm-12">
            <div class="container">
                <div class="row">
                    <h1>PRODUCTOS DESTACADOS</h1> 
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-12 mt-5 mb-5">
        <div class="container">
            <div class="row">
                <div class="card-deck text-center col-md-12 productos-inicio">
                    <!-- Sección de Productos -->
                    <?php echo $productController->getFeatureInstrumens() ?>
                </div>
            </div>
        </div>  
    </div>



    <div class="col-lg-12 slogan-imagen">
        <div class="row">
            <div class="col-lg-6" col-md-4>
                <h1 class="display-2 text-center">TIENDA DE MÚSICA EMAI</h1>
                <h1 class="display-4 text-center">CONÓNOCENOS</h1>

            </div>
            <div class="col-lg-6 col-md-8">
                <img src="app/Views/assets/images/imagen 1.jpg" class="img-fluid" alt=""/>

            </div>
        </div>
    </div>
    <div class="encabezado mt-5 mb-4">
        <div class="col-sm-12">
            <div class="container">
                <div class="row">
                    <h1>EVENTOS</h1> 
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12 recitales-inicio">
        <div class="container">
            <div class="row">
                <!-- Sección de Eventos -->
                <?php echo $newsController->getFeatureNews() ?>
            </div> 
        </div>
    </div>
<div class="vision-mision">
    <div class="vision mt-3 mb-4 mt-5"> 
        <div class="col-lg-12">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <img src="app/Views/assets/images/imagen bateria comprimida.jpg" class="img-fluid" alt="Responsive image">

                    </div>
                    <div class="col-lg-6  col-md-12">
                        <h1 class="display-3">MISIÓN</h1>
                        <p class="text-justify lead">Nuestra misión es proporcionar los mejores instrumentos musicales con la más alta calidad y precios accesibles, para satisfacer a nuestros clientes. Queremos que estén satisfechos con nuestros productos y servicios.
                            Brindaremos un mejor sonido y diseños innovadores para que tanto niños, jóvenes y adultos tengan acceso a productos que estén a la vanguardia.
                        </p>
                        <BR> 
                        <h1 class="display-3">VISIÓN</h1>
                        <p class="text-justify lead">
                            Nuestra visión es ser la empresa número uno en venta de instrumentos musicales, así como también lograr un mejor sonido y diseños vanguardistas para lograr una mejor imagen en nuestros instrumentos.</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


<footer class="pie text-white">
    <div class="col-lg-12 p-3 mb-2text-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <div class="col-lg-12 text-center">
                        <h6 class="lead">TIENDA MUSICAL</h6>    
                    </div>
                    <div class="col-lg-12 col-md-12 text-center">
                        <img src="app/Views/assets/images/emai.png" width="120" height="70" alt="">    
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

<script src="app/Views/assets/js/jquery.js" type="text/javascript"></script>
<script src="app/Views/assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="app/Views/assets/scripts/scripts.js" type="text/javascript"></script>
</body>
</html>