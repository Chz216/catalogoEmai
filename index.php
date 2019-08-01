<?php 
    require 'app/app.php'; 
    $app = new App();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CatalogoEmai</title>
    <link href="<?php echo $app->localUrl; ?>assets/css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo $app->localUrl; ?>assets/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo $app->localUrl; ?>assets/estilos/estilos.css" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=DM+Sans|Poppins&display=swap" rel="stylesheet">
</head>
<body>


    <?php $app->getMenu(); ?>

    <?php $app->getRoutes(); ?>

    <footer class="pie text-white">
        <div class="col-lg-12 p-3 mb-2text-white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12">
                        <div class="col-lg-12 text-center">
                            <h6 class="lead">TIENDA MUSICAL</h6>    
                        </div>
                        <div class="col-lg-12 col-md-12 text-center">
                            <img src="<?php echo $app->localUrl; ?>assets/images/emai.png" width="120" height="70" alt="">    
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
                        <p>
                          <a  style='color:white;' href="https://www.facebook.com/tiendaemai">
                            <span class="fa fa-facebook-square mr-2"></span>
                            <span>Facebook</span>
                          </a>
                        </p>
                        <i class="fa fa-phone mr-2" ></i>
                        <a href="tel:+340 38-4-34-67" style='color:white;'>38-4-34-67</a>
                        <p><span class="fa fa-map-marker mr-2"></span>Centro Tehuacán Puebla</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="<?php echo $app->localUrl; ?>assets/js/jquery.js" type="text/javascript"></script>
    <script src="<?php echo $app->localUrl; ?>assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo $app->localUrl; ?>assets/scripts/scripts.js" type="text/javascript"></script>
</body>
</html>