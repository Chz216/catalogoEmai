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